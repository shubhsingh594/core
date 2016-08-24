#!/bin/bash

script_path="$( cd "$( dirname "${BASH_SOURCE[0]}" )" && pwd )"

user='admin'
pass='admin'
server='localhost:8080'
upload="/tmp/upload.txt"
header="/tmp/header.json"

echo -en "{
  \"bundling_tests.sh\":{
    \"content-id\":\"1\",
    \"x-oc-mtime\":\"1471254375\"
  },
  \"test/zombie1.jpg\":{
    \"content-id\":\"2\",
    \"x-oc-mtime\":\"1471254376\"
  },
  \"test/zombie2.jpg\":{
    \"content-id\":\"2\",
    \"x-oc-mtime\":\"1471254377\"
  },
  \"test/zombie3.jpg\":{
    \"content-id\":\"3\",
    \"x-oc-mtime\":\"1471254377\"
  }
}" > $header

size0=$(du -sb $header | awk '{ print $1 }')
md50=$(md5sum $header | awk '{ print $1 }')

testfile1="$script_path/bundling_tests.sh"
size1=$(du -sb $testfile1 | awk '{ print $1 }')
md51=$(md5sum $testfile1 | awk '{ print $1 }')

testfile2="$script_path/zombie.jpg"
size2=$(du -sb $testfile2 | awk '{ print $1 }')
md52=$(md5sum $testfile2 | awk '{ print $1 }')

mdupload=$(md5sum $upload | awk '{ print $1 }')
boundrary="boundary_$mdupload"

#METADATA
echo -en "--$boundrary\r\nContent-ID: 0\r\nContent-Type: application/json; charset=UTF-8\r\nContent-length: $size0\r\nContent-MD5: $md50\r\n\r\n" > $upload
cat $header >> $upload

#CONTENTS
echo -en "\r\n--$boundrary\r\nContent-ID: 1\r\nContent-length: $size1\r\nContent-MD5: $md51\r\n\r\n" >> $upload
cat $testfile1 >> $upload

echo -en "\r\n--$boundrary\r\nContent-ID: 2\r\nContent-length: $size2\r\nContent-MD5: $md52\r\n\r\n" >> $upload
cat $testfile2 >> $upload

#END BOUNDRARY
echo -en "\r\n--$boundrary--\r\n" >> $upload

#POST
#curl -X DELETE -u $user:$pass --cookie "XDEBUG_SESSION=MROW4A;path=/;" "http://$server/remote.php/webdav/config.cfg"

curl -X POST -H "Content-Type: multipart/related; boundary=$boundrary; start=0" --cookie "XDEBUG_SESSION=MROW4A;path=/;" \
    --data-binary "@$upload" \
    "http://$user:$pass@$server/remote.php/dav/files/$user"




