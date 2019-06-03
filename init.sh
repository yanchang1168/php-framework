#!/bin/bash
if [ -f "./init.lock" ];then
    echo "系统已经初始化, 请勿重复操作"
else
    mkdir -p storage/cache/framework  #框架缓存目录
    mkdir -p storage/cache/view       #模板缓存目录
    mkdir -p storage/log              #日志目录
    composer install
    echo lock >> ./init.lock
fi

