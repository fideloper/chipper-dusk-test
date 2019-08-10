#!/usr/bin/env bash

php -S 0.0.0.0:8000 -t public 2>/dev/null &
HTTP_PID=$!

php artisan dusk
#DUSK_RESULT=$?
#
#kill $HTTP_PID
#
#exit $DUSK_RESULT
