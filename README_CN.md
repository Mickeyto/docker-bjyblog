# docker-bjyblog
基于 Docker 运行 laravel-bjyblog

# 配置 docker .env 文件
cp .env-exp .env

# 配置 Nginx
1. docker-compose.yml
    ```
    volumes:
            - "./etc/nginx/default.conf:/etc/nginx/conf.d/default.conf"
            - "./etc/cert:/etc/cert"    #证书位置
            - "./web/blog:/var/web" #代码目录
            - "./etc/nginx/${VHOSTS_CONF}:/etc/nginx/conf.d/default.template"   #虚拟主机配置文件，默认使用 etc/nginx/default.template.conf
    ```
    自定义虚拟主机文件：修改 .env VHOSTS_CONF={文件名}

# 配置 blog 项目
1. 复制 web/blog/ 跟目录下的 .env.example 文件并重命名为 .env
    ```
    cd web/blog/ && cp .env.example .env
    ```
2. 可配置版权所有年份
    .env 配置项： COPYRIGHT_DATE #默认 2014

# 运行
    ```
    docker-compose up   //启动
    docker-compose down //停止与删除容器
    ```