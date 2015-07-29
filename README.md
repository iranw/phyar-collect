# Phyar采集框架

phalcon的多模块采集框架。

###### http访问
`demo`: http://localhost:9001/user/index/index
`demo`: http://localhost:9001/user/index/index/?id=1&name=iranw

###### cli执行
```
#php cli.php /user/index/test
#php cli.php /user/index/test a=2 name=iranw
```

###### 控制器获取参数方式
```
print_r($this->params);         //获取全部参数
echo $this->params['name'];     //获取特定参数
```
