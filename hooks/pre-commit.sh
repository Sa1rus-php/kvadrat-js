#!/bin/bash
set +x;
STAGED_FILES_CMD=`git diff-index HEAD|awk ' {print $6} '|grep \\\\.php|grep -v server/vendor|grep -v server/storage/|grep -v server/database/migrations|grep -v server/resources`

RED='\033[0;31m'
Green='\033[0;32m'
NC='\033[0m' # No Color

if [[ `docker ps | grep post | wc -l` -lt  2  ]]; then
    printf "${RED}Docker not run${NC} \n"
    exit 1
fi

for FILE in $STAGED_FILES_CMD
do
    FILE=${FILE:7}
    FILES="$FILES $FILE";
done

if [ "$FILES" != "" ]
then
    echo "Running Code Sniffer..."

    docker exec --tty kyrs_php ./vendor/bin/phpcs --standard=phpcs.xml $FILES

    if [ $? != 0 ]
    then
        printf "Coding standards errors have been detected. For automatically fix try run: \n ./server/vendor/bin/phpcbf $PARAMS \n"
        exit 1
    fi
fi
exit $?;
