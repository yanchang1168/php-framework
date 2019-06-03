# PHP框架


### 目录结构
```
   ├── app                       //应用主体
   │   ├── Conf                  //配置文件
   │   ├── Controller            //控制器
   │   └── Model                 //模型 
   │   └── View                  //模板
   ├── framework                 //框架核心代码
   │   ├── autoload.php          //自动加载类
   │   └── conf.php              //加载配置文件
   │   └── framework.php         //框架入口
   │   └── log.php               //日志类
   │   └── router.php            //路由
   ├── library                   //工具
   │   ├── tool.php              //工具类
   ├── public                    //程序入口
   ├── storage                   //存储目录
   │   ├── cache/framework       //类自裁加载缓存
   │   ├── cache/view            //模板缓存
   │   └── log                   //日志文件
   └── vendor                    //composer
   ```
   
   

### 路由
不需要单独写路由文件, 根据链接自动匹配到控制器, 例如
```
/a/b  => app/Controller/AController的b方法
/a/b/c  => app/Controller/A/BController的c方法
/a => 报错, 或跳转到首页
```

### 下载完成之后, 需要执行init.sh进行初始化
初始化完成之后, 会生成init.lock文件, 请勿随意删除此文件
