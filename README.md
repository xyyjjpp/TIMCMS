Telegram: **[TIMCMS](https://t.me/timcms)**  
gpt key购买: **[GPT Key](https://gpt.myyjjpp.com)**  

## 素材包介绍
>content
>> about_img - 关于我们部位的图片  
> - about_txt
>   - 关于我们部位的文字介绍
> - banner_img
>   - 首页顶部 and 栏目页横幅图片
> - column
>   - 栏目名称
> - logo_img
>   - 顶部logo图标以及ico图标
> - partner_img
>   - 尾部合作伙伴的图片
> - address.txt
>   - 地址
> - ask_content.txt
>   - 用户评价内容
> - ask_name.txt
>   - 评价的用户名字
> - bannertxt.txt
>   - 首页顶部横幅位置广告语
> - email.txt
>   - 邮箱
> - faq.txt
>   - 常见问题解答
> - phone.txt
>   - 电话号码
> - servicetxt.txt
>   - 服务方向内容
> - tdk.txt
>   - 当前域名的tdk信息

关于 **tdk** 的格式为 > **顶级域名||标题||关键词,关键词,关键词,关键词||描述||数据库名||数据库密码||备案号||logo标题**
> 关键词位置 **4个以上** 并且用 **,** 英文逗号隔开 备案号可写可不写其余的必须要写,域名不要存在大写,logo标题为页面顶部的logo图片的文字水印



`素材包内容可自定义替换,top层的文档以及文件夹命名不能改,文件夹里面的图片后缀不能更改,txt里面的格式不能更改,文件夹里面的图片或者文档的命名可以自定义`  

`素材包内容可自定义替换,top层的文档以及文件夹命名不能改,文件夹里面的图片后缀不能更改,txt里面的格式不能更改,文件夹里面的图片或者文档的命名可以自定义`  

`素材包内容可自定义替换,top层的文档以及文件夹命名不能改,文件夹里面的图片后缀不能更改,txt里面的格式不能更改,文件夹里面的图片或者文档的命名可以自定义`  


### 环境要求
> nginx php8.0 and mysql8.0 ,php需要安装fileinfo opcache sg11扩展  

### 上站步骤:

> #### **1. 安装环境**  

<img width="500" alt="image" src="https://github.com/xyyjjpp/TIMCMS/assets/128358193/c32e5792-5082-4dac-b762-d9cf96dbbbbc">
<img width="500" alt="image" src="https://github.com/xyyjjpp/TIMCMS/assets/128358193/0382b920-9a03-4d68-bfa9-09c161b25e19">
<img width="500" alt="image" src="https://github.com/xyyjjpp/TIMCMS/assets/128358193/a7158abb-d8d2-400d-919a-f28e19867c46">

> #### **2. 在www/wwwroot/demo 新建一个demo 以及在 www/script 新建一个script**  
>> ##### **2-1. 然后分别把myyjjpp压缩包上传到demo下面 script上传到script下面 全部解压**  
<img width="500" alt="image" src="https://github.com/xyyjjpp/TIMCMS/assets/128358193/52ffd913-b724-4496-a9e3-c63f73ee1ab3">  
<img width="500" alt="image" src="https://github.com/xyyjjpp/TIMCMS/assets/128358193/56a3f51a-b54d-4ce7-a468-b453fee91c54">  

> #### **3. 将demo下面的new.sql剪切到 /www/backup/database**
> #### **4. 将demo下面的ixed.lin剪切到 /www/server/php/80/lib/php/extensions/no-debug-non-zts-20200930**
> #### **5. 修改mysql root密码为 dztBsztptWH877Nk**
> #### **6. 重启php环境**
> #### **7. 表格排序域名进行批量搭建站点**
<img width="500" alt="image" src="https://github.com/xyyjjpp/TIMCMS/assets/128358193/0d684f7f-a298-40eb-9bda-6408397fe313">
<img width="500" alt="image" src="https://github.com/xyyjjpp/TIMCMS/assets/128358193/484639d5-1a75-49a2-a74f-a88bce6bd50c">
<img width="500" alt="image" src="https://github.com/xyyjjpp/TIMCMS/assets/128358193/5d4b4cac-79e5-4edc-ad90-9fb4dde6685f">

> #### **7. 在表格里面排序tdk格式**
<img width="500" alt="image" src="https://github.com/xyyjjpp/TIMCMS/assets/128358193/b6a0cc03-d4fc-4139-a750-217ef4d3119c">
<img width="500" alt="image" src="https://github.com/xyyjjpp/TIMCMS/assets/128358193/a341c8f0-4b4b-48ab-bbce-b93a12fbcf4e">

> #### **8. 排序好的内容粘贴到content/tdk.txt**  
<img width="500" alt="image" src="https://github.com/xyyjjpp/TIMCMS/assets/128358193/d9fc27b2-53ac-427f-996a-c5ad0259f1c1">

> #### **9. 给指定文件夹或者文件777权限** 
<img width="500" alt="image" src="https://github.com/xyyjjpp/TIMCMS/assets/128358193/9d2eaa49-f759-42c9-b51a-fc455e32df5a">

> #### **10. 给指定文件夹或者文件打包成demo.zip** 
<img width="500" alt="image" src="https://github.com/xyyjjpp/TIMCMS/assets/128358193/132a32ea-0475-41f5-86a8-67032e4e2a32">

> #### **11. 打开终端 执行ssl命令, 就是域名强制https 不强制**  
>> ##### **11-1. 未授权直接发我授权码进行授权即可** 
`openssl enc -d -aes-256-cbc -in /www/script/ssl.sh.enc -pass pass: | bash`  

<img width="500" alt="image" src="https://github.com/xyyjjpp/TIMCMS/assets/128358193/324d85cc-5708-4816-ab54-45869666cc16">
<img width="500" alt="image" src="https://github.com/xyyjjpp/TIMCMS/assets/128358193/4288e227-5c19-47eb-9d91-6a0353c3009c">

> #### **12. 执行sql文件入库命令**  
>> ##### **12-1. tdk里面的数据库表名放到script/sql.txt 末行需要多添加一个空行**  
`openssl enc -d -aes-256-cbc -in /www/script/sql.sh.enc -pass pass: | bash`  

<img width="500" alt="image" src="https://github.com/xyyjjpp/TIMCMS/assets/128358193/dad8bdc2-2d73-4011-a6c7-b360ec95cf4f">
<img width="500" alt="image" src="https://github.com/xyyjjpp/TIMCMS/assets/128358193/c468557b-112f-4e1c-8b6d-fce34a653b4f">

> #### **13. 批量域名的nginx伪静态 以及 301重定向(默认是需要https 如果 没有跑ssl 不需要重定向)**
>> ##### **13-1. 顶级域名放到script/domain.txt 末行需要多添加一个空行**
`openssl enc -d -aes-256-cbc -in /www/script/nginx.sh.enc -pass pass: | bash`  
`openssl enc -d -aes-256-cbc -in /www/script/301.sh.enc -pass pass: | bash` 

<img width="500" alt="image" src="https://github.com/xyyjjpp/TIMCMS/assets/128358193/af2ac969-e719-4267-b166-3e9870c4aeef">
<img width="500" alt="image" src="https://github.com/xyyjjpp/TIMCMS/assets/128358193/55d95afe-06ae-4922-b17c-d7fa9e5fca2d">

> #### **14. 删除新建的站点里面的垃圾文件 不强求**
>> ##### **14-1. 删除命令放入delete.txt 末行需要多添加一个空行**
`rm -rf /www/wwwroot/shangbeiqiye.com/*`  **星号为删除所有**
`openssl enc -d -aes-256-cbc -in /www/script/delete.sh.enc -pass pass: | bash`  

<img width="500" alt="image" src="https://github.com/xyyjjpp/TIMCMS/assets/128358193/685591f5-81f3-48e6-9b78-9fb2cefb697a">
<img width="500" alt="image" src="https://github.com/xyyjjpp/TIMCMS/assets/128358193/973feb1a-ac24-4dfd-a6ce-03b14fb134b1">

> #### **15. 解压demo.zip(程序包)到指定域名下**  
`unzip /www/wwwroot/demo/demo.zip -d /www/wwwroot/shangbeiqiye.com/`  
`openssl enc -d -aes-256-cbc -in /www/script/delete.sh.enc -pass pass: | bash`  

<img width="500" alt="image" src="https://github.com/xyyjjpp/TIMCMS/assets/128358193/f863c101-45f8-4d53-97eb-4ee4911732de">
<img width="500" alt="image" src="https://github.com/xyyjjpp/TIMCMS/assets/128358193/7e9cfbc0-c539-419a-a509-ce531e84824a">
<img width="500" alt="image" src="https://github.com/xyyjjpp/TIMCMS/assets/128358193/c23f5317-f1a0-415d-9ce9-81fa7156a1bb">


> #### **16. 复制muban下面的模板文件夹到到指定域名下面的themes文件夹下面**  
`cp -r /www/wwwroot/demo/muban/11 /www/wwwroot/shangbeiqiye.com/themes`  **muban下面的文件夹根据number自增,我这边是从11开始**  
`openssl enc -d -aes-256-cbc -in /www/script/delete.sh.enc -pass pass: | bash`  
>> ##### **16-1. 以及给这个域名下面的themes777权限** 
`chmod -R 777 /www/wwwroot/shangbeiqiye.com/themes`  
`openssl enc -d -aes-256-cbc -in /www/script/delete.sh.enc -pass pass: | bash` 

<img width="500" alt="image" src="https://github.com/xyyjjpp/TIMCMS/assets/128358193/01598b43-c112-473b-95a2-5af384be566b">
<img width="500" alt="image" src="https://github.com/xyyjjpp/TIMCMS/assets/128358193/4f3e4ac9-073c-4dcc-8a01-a83c73c89a9a">
<img width="500" alt="image" src="https://github.com/xyyjjpp/TIMCMS/assets/128358193/a91b2610-11ad-4d79-8cc8-a0f9a1903daf">
<img width="500" alt="image" src="https://github.com/xyyjjpp/TIMCMS/assets/128358193/35d3e286-941e-4bab-94d8-7e9562f585dd">
<img width="500" alt="image" src="https://github.com/xyyjjpp/TIMCMS/assets/128358193/fed03291-1db5-49b0-a3cc-584e632e55d4">
<img width="500" alt="image" src="https://github.com/xyyjjpp/TIMCMS/assets/128358193/ca43e756-3d45-453c-8e44-56527592dac0">

> #### **17. 直接打开首页 然后复制我红色字体的授权码进行授权**  
<img width="500" alt="image" src="https://github.com/xyyjjpp/TIMCMS/assets/128358193/33019fb8-fada-47c0-86d4-8a86d5b032ab">

> #### **18. 我这边授权了需要删除根目录的mac.json文件,然后重新访问首页**  
<img width="500" alt="image" src="https://github.com/xyyjjpp/TIMCMS/assets/128358193/c9095bb1-3f50-4bb6-98ba-a6b776d0caf5">
<img width="500" alt="image" src="https://github.com/xyyjjpp/TIMCMS/assets/128358193/508149d9-542f-4338-9fc4-f443a873e76a">

> #### **19. 访问/update.php /sql.php(批量可以直接去iis等工具网批量获取标题 默认需要加www)**
<img width="500" alt="image" src="https://github.com/xyyjjpp/TIMCMS/assets/128358193/26708470-c39d-4bd3-8200-1e5807a7adef">
<img width="500" alt="image" src="https://github.com/xyyjjpp/TIMCMS/assets/128358193/abbf495d-4e98-4e55-8075-db625484736c">
<img width="500" alt="image" src="https://github.com/xyyjjpp/TIMCMS/assets/128358193/b854750e-74d7-4188-9343-e8930e6a3ee7">

> #### **20. OK (模板随机抽取的)**
![www shangbeiqiye com__11zon](https://github.com/xyyjjpp/TIMCMS/assets/128358193/9b7a4b84-f821-46b2-8c4d-d7e51fb15690)
