#!/bin/sh

mkdir -p ./imgs
find -type f \( -name '*.mp4' -or -name '*.MP4' \) \
     -exec ffmpeg -ss 00:00:01 -i {} -vframes 1 -q:v 2 imgs/{}.origin.png \; \
     -exec convert imgs/{}.origin.png -resize 640 imgs/{}.png \; \
     -exec rm imgs/{}.origin.png \;
