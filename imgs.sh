#!/bin/bash

find -name '*.mp4' -exec ffmpeg -ss 00:00:01 -i {} -vframes 1 -q:v 2 {}.png \;
