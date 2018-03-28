#!/bin/sh

find -name '*.MP4' -printf "file '%f'\n" | sort > mylist.txt && \
ffmpeg -f concat -i mylist.txt -c:s copy -c:v libx264 -b:v 13000k -map 0:0 -map 0:2 output.mp4