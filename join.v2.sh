#!/bin/sh

find -name '*.MP4' -printf "file '%f'\n" | sort > mylist.txt && \
ffmpeg -f concat -i mylist.txt -c:s copy -c:v copy -map 0:0 -map 0:2 "${PWD##*/}.mp4"
