<?php 
echo "2当前执行脚本的文件名:",$_SERVER['PHP_SELF'];
echo "<br>";
echo "3服务器使用的 CGI 规范的版本:",$_SERVER['GATEWAY_INTERFACE'];
echo "<br>";
echo "4当前运行脚本所在的服务器的 IP 地址:",$_SERVER['SERVER_ADDR'];
echo "<br>";
echo '5当前运行脚本所在的服务器的主机名:', $_SERVER['SERVER_NAME'];
echo "<br>";
echo "10服务器标识字符串，在响应请求时的头信息中给出。 (如：Apache/2.2.24):",$_SERVER['SERVER_SOFTWARE'];
echo "<br>";
echo "12请求页面时通信协议的名称和版本:",$_SERVER['SERVER_PROTOCOL'];
echo "<br>";
echo "14访问页面使用的请求方法:",$_SERVER['REQUEST_METHOD'];
echo "<br>";
echo "16请求开始时的时间戳:",$_SERVER['REQUEST_TIME'];
echo "<br>";
echo "18query string（查询字符串），如果有的话，通过它进行页面访问:",$_SERVER['QUERY_STRING'];
echo "<br>";
echo "20当前请求头中 Accept: 项的内容，如果存在的话:",$_SERVER['HTTP_ACCEPT'];
echo "<br>";
echo "22当前请求头中 Accept-Charset: 项的内容，如果存在的话:",$_SERVER['HTTP_ACCEPT_CHARSET'];
echo "<br>";
echo "24当前请求头中 Host: 项的内容，如果存在的话:",$_SERVER['HTTP_HOST'];
echo "<br>";
echo "26引导用户代理到当前页的前一页的地址（如果存在）:",$_SERVER['HTTP_REFERER'];
echo "<br>";
echo "28如果脚本是通过 HTTPS 协议被访问，则被设为一个非空的值。",$_SERVER['HTTPS'];
echo "<br>";
echo "30浏览当前页面的用户的 IP 地址。",$_SERVER['REMOTE_ADDR'];
echo "<br>";
echo "32浏览当前页面的用户的主机名:",$_SERVER['REMOTE_HOST'];
echo "<br>";
echo "34用户机器上连接到 Web 服务器所使用的端口号:",$_SERVER['REMOTE_PORT'];
echo "<br>";
echo "36当前执行脚本的绝对路径:",$_SERVER['SCRIPT_FILENAME'];
echo "<br>";
echo "38该值指明了 Apache 服务器配置文件中的 SERVER_ADMIN 参数。如果脚本运行在一个虚拟主机上，则该值是那个虚拟主机的值。",$_SERVER['SERVER_ADMIN'];
echo "<br>";
echo "40Web 服务器使用的端口。默认值为\"80\"。如果使用 SSL 安全连接，则这个值为用户设置的 HTTP 端口:",$_SERVER['SERVER_PORT'];
echo "<br>";
echo "42包含了服务器版本和虚拟主机名的字符串:",$_SERVER['SERVER_SIGNATURE'];
echo "<br>";
echo "44当前脚本所在文件系统（非文档根目录）的基本路径。这是在服务器进行虚拟到真实路径的映像后的结果:",$_SERVER['PATH_TRANSLATED'];
echo "<br>";
echo "46包含当前脚本的路径。这在页面需要指向自己时非常有用。__FILE__ 常量包含当前脚本(例如包含文件)的完整路径和文件名:",$_SERVER['SCRIPT_NAME'];
echo "<br>";
echo "48URI 用来指定要访问的页面。例如 \"/index.html\":",$_SERVER['SCRIPT_URI']
?>