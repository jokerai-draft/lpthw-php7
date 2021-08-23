
一个载入页可能会有什么
- 预先填充的 响应报文结构 (响应报文 状态行,首部,主体)
- 浏览器适配的 header 和 body (http 传输)(浏览器渲染)
- 预先填充的 站 config (读写服务器连接)
- 预先填充的 浏览器 cookie (读写登入状态)
- 预先填充的 字段 (填入到页面)(读写全局变量, 写-生成可点击链接一旦点击立刻(跳转, 客户端发送 HTTP 请求)发送请求等待响应-并得到新的可读的 HTTP 变量, 读-读取 HTTP GET query string )

载入页本身就是一个实际干活儿的


配合 HTTP 报文格式(HTTP 请求报文格式、HTTP 响应报文格式)

请求报文 (浏览器地址栏 负责发出请求报文)
响应报文 (服务器脚本要负责发出响应报文) // 格式
https://www.cnblogs.com/engraver-lxw/p/7551041.html
https://stackoverflow.com/questions/14551194/how-are-parameters-sent-in-an-http-post-request

这块其实是涵盖了 " PSR-7 HTTP 消息接口规范
https://learnku.com/docs/psr/psr-7-http-message/1616 " 的全部内容, 包括 "每一个 HTTP 请求都有专属的格式"
https://www.bilibili.com/video/BV1c4411d7jb?p=73 HTTP 请求报文和 HTTP 响应报文, 一次请求花费总时间 2RTT + 文档传输延迟
  一个 HTTP 报文处理器的实例? HTTP 报文处理器 一个 HTTP message handler
