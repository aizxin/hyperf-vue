# 安装 php扩展
  - 安装 [swoole](https://github.com/swoole/swoole-src)

## 运用
  - 应用 hyperf 许多的 协程组件库
  - 详细用法参考[这里](https://doc.hyperf.io/#/zh/awesome-components)

  - 模板使用：[vueBlog-template](https://github.com/uncleLian/vueBlog-template)

## 开发和发布
```bash
# 克隆项目
git clone https://github.com/aizxin/hyperf-vue.git

cd hyperf-vue

# 启动
php bin/hyperf.php start

# 安装依赖
npm install

# 启动服务
npm run dev

# 发布
npm run build

# 压测
  ab -c 100 -n 1000000 -k http://xxx:9501/ http://laravel.cc/

```

## 交流
欢迎热爱学习、忠于分享的朋友一起来交流
- 交流gmail：whero110@gmail.com

## License
[MIT](http://opensource.org/licenses/MIT)

Copyright (c) 2018-present