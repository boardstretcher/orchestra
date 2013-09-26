#!/bin/bash
# name: restart apaches
# desc: job to run on a server and restart apache
# os: ubuntu 12.10
# status: active
# tags: web,production,apache
# created: 1378574928
# updated: 1378576000
# lastrun: 1378577021
# successes: 42
# failures: 3
# totaltime: 1082
# user: root
# requiredvars: $FUNCTION
# script
export FUNCTION="restart"

cd
apachectl $FUNCTION
