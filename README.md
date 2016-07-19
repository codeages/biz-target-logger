# Targetlog

一个日志类，用于针对某个对象记录日志的类，日志存储到数据库，便于查询检索。

## 使用说明


创建了针对标识为{example-1}对象的日志类：
```
$logger = new Targetlogger('example', 1);
```

记录日志：
```
$context = array('user_id' => 1, 'action' => 'some_action', 'ip' => '127.0.0.1');
$logger->debug('something happen', $context);
```

其中$context为可选参数，$context中的各个key也是可选。如果$context中的key传入了`user_id`, 'action', 'ip'则会当做字段记录，可被检索。
