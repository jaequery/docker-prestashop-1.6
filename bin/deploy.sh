#!/bin/bash
dir="$( cd "$( dirname "${BASH_SOURCE[0]}" )" && pwd )"
parentdir="$(dirname "$dir")"
app=${parentdir##*/}
dest=$1
dest="jae@138.68.237.21"
rsync --exclude="volumes" --exclude=".git" -avzr $parentdir $dest:~/sites/ && ssh $dest "cd ~/sites/$app && docker-compose kill && docker-compose -f docker-compose.live.yml up && docker-compose logs"
