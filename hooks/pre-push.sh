#!/bin/bash

set +x;

cd sources

ERR_RESULT=`npm run lint|grep error|wc -l | sed -e "s/^[[:space:]]*//" -e "s/[[:space:]]*$//"`

if [ $ERR_RESULT -gt 0 ]; then
   echo "You have $ERR_RESULT errors. Need a fix";
   exit 1;
else
    echo "No errors detected in JS scripts";
fi

WAR_RESULT=`npm run lint|grep warning|wc -l | sed -e "s/^[[:space:]]*//" -e "s/[[:space:]]*$//"`
if [ $WAR_RESULT -gt 0 ]; then
   echo "You have $WAR_RESULT warnings. Need a fix";
   exit 1;
else
    echo "No warning detected in JS scripts";
fi

exit 0;