��BAE�ϵ�ʹ��˵��
    ����1.1.10�汾�Ĵ�����ֲ���ص�һ�ǿ�����bae��ʹ��bae�ṩ�ķ����ص���ǿ����ڱ��ؽ����޷����
һ�������bae��ʹ��
	1��ʹ��ǰ��������yii�Ļ�����
    2����bae��ص�����д��/framework/baeconf/baeconfig.php�У�Ԥ�������������ݿ⣬baelog��bae��memcache����
       ʹ�����ݿ⣺��db�����connectionString�ֶ��е�dbname�޸�Ϊ�Լ��������ݿ�����
       ע�⣺�û���bae��ֻ��ʹ��bae�ṩ�������ݿ⣬����û�ʹ���˱������ݿ⣬��bae������ʱ���׳�һ���쳣��
	   �����û�ȥ��main.php�б������ݿ�����á�
	   
       ʹ����־��Ԥ��������������־·�� CBaeLogRoute �� CEmailLogRoute
       �û�ʹ��CEmailLogRouteʱ��Ҫ����queueName�Լ�emails. queueName����Ϊ��Ϣ����Ķ�����
	   ��ʹ��ǰȷ������Ϣ�����д�����һ�����У���emails����Ϊ�����ʼ��ĵ�ַ��queueName��emails�����ļ�
		/framework/baeconf/baeconfig.php�����á�
		
	3��ʹ��memcache��
       baememcache�ṩadd\get\set\mget\delete\replace������baememcache�����ļ���/framework/caching/CBaeMemCache.php��

    4��ͨ��CUploadedFile(�ļ���·����framework/web/CUploadedFile.php)�ϴ����ļ�����Ϊһ��object�ϴ����ƴ洢��
       �ϴ�����public function saveAs($file,$deleteTempFile=true)�в���$file�Ǳ����ڱ��ص�·���������޸�Ϊ�ƴ洢��$bucket. ��ʹ��ǰȷ���Ѿ�������bucket��

��������ڱ���ʹ��
    1���ڱ���ʹ�÷�ʽͬyii��ԭ����ʽ��

������ʱ��֧�ֵĹ���
    1����֧��CFileLogRoute
    2����֧��memcache��flush����
    3��session��֧���û��Զ���Ĵ洢��ʽ��������ʹ��CDbHttpSession��CCacheHttpSession������ʹ��CHttpSession�������漰��ini_set(),ini_get()��session_save_path()�ķ�����       
	��ʹ��
    4����֧��yii�������з�ʽ
    5����֧����SOAP��չ��ص�webService��ʽ

�ġ���yii�ṩ��demo��ʾʹ�÷�����

	1�� ȷ���Ѿ���bae�ϴ���Ӧ�ò������˰汾����Ӧ�ô�����svn check�����أ�����Ӧ������yii,������http://yii.duapp.com���汾��Ϊ1,��ʱ1/���������ļ�index.php�Լ�app.conf
	2�� ��Bae_yii1.1.10Ŀ¼�����ݿ�����������bae�汾Ŀ¼1/�£���appdemo.conf�ļ��޸�Ϊapp.conf��������demos��rewrite����,
	3�� ���޸ĺ�Ĵ�����svn check in��bae��
        4�� �������http://yii.duapp.com���Է���demos�е�blogӦ�ã�
                http://yii.duapp.com/game����hangmanӦ�ã�
		http://yii.duapp.com/helloworld����helloworldӦ��
    ע�⣺  ����blogʱҪ��demos/blog/protected/data/schema.mysql.sql�ļ����������ݿ���(ȷ���Ѿ���developer.baidu.com/yun�д�����һ�������ݿ�)
   

   
�塢������Ѿ���ʹ��yii�������ṩ��diff�ļ����ɽ���Ĵ�����������ֲ��bae��
    ������Ĵ���Ŀ¼Ϊyii1.10����yii.diff������yii1.10�£�
    ��������patch -p1 < yii.diff
    Ȼ���ٽ������ļ�������yii1.10����ӦĿ¼�У�Bae_yii1.1.10/appdemo.conf��
                                               Bae_yii1.1.10/framework/baeconf
				 Bae_yii1.1.10/framework/caching/CBaeMemCache.php
				 Bae_yii1.1.10/framework/logging/CBaeLogRoute.php
				 Bae_yii1.1.10/framework/logging/CEmailLogRoute.php
   
  ���ǻ��ṩ��build.sh�ű����������������������ֻ�轫build.sh��yii.diff������yii1.10��.
  ��yii.1.10Ŀ¼����������./build.sh����������bae�汾��yii��

 
	
    
    
	

   
    
