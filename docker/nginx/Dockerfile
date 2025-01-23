FROM nginx:latest

# 設定ファイルを指定の場所に置く
COPY ./docker/nginx/conf.d/nginx.conf /etc/nginx/conf.d/nginx.conf


CMD ["nginx", "-g", "daemon off;"]