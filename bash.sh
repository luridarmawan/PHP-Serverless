#!/bin/sh
PHP_BIN=/var/task/php71/bin/php
#PHP_BIN=/usr/bin/php
PHP_APP=helloworld.php
handler () {
    set -e

    # Event Data is sent as the first parameter
    EVENT_DATA=$1

    # This is the Event Data
    #EVENT_DATA='{"a":"b"}'
    echo $EVENT_DATA

    # Example of command usage
    EVENT_JSON=$(echo $EVENT_DATA | jq .)

    RESULT=`$PHP_BIN $PHP_APP "$EVENT_JSON"`

    # This is the return value because it's being sent to stderr (>&2)
    echo $RESULT >&2
    #echo "{\"success\": true, \"body\": \"$RESULT\"}" >&2
    #echo "{\"success\": true, \"body\": \"$EVENT_JSON\"}" >&2
}

