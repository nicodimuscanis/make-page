# Описание
Этот простой вебсервис сделан для возможности прменять сокращатель статей от Яндекса https://300.ya.ru для произвольных текстов.

Сераис от Яндекса в качестве входных данных использует только гиперссылки на статьи, но не произвольный текст. 
Идея состояла в том чтобы обойти это ограничение путём создания временного html файла, ссылку на который можно скормить сокращателю статей от Яндекса.

Имена создаваемых файлов являются случайными, потому что Яндекс привязывает ссылку к пересказу статьи.

# Установка
На сервере развернуть два файла из директории `src`