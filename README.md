# DO180-apps
DO180 Repository for Sample Applications 

# Whichever it is, log into cluster provided, and create new project
oc login -u developer -p developer ${RHT_OCP4_MASTER_API} \

oc new-project test-project 

# Deploy a simple nodejs app
oc new-app --name my-nodejs \\ \
nodejs:12~https://github.com/jasonwcc/DO180-apps#master --context-dir nodejs-helloworld

oc get all -l app=my-nodejs \

oc logs -f bc/my-nodejs 

# Deploy a simple php app
oc new-app --name my-php \\ \
php:7.3~https://github.com/jasonwcc/DO180-apps#master --context-dir php-helloworld

oc logs -f bc/my-nodejs 

oc get svc 

oc expose svc my-php 

oc get route 

copy the whole url 
(should look like my-php-test-project.apps.na45.prod.nextcle.com) \

curl my-php-proj2.apps.na45.prod.nextcle.com \
Hello, World! php version is 7.3.2.0

# Deploy a a temperature convertor app
oc new-app --name my-temp \\ \
php:latest~https://github.com/jasonwcc/DO180-apps --context-dir temps

oc logs -f bc/my-temps 

oc expose svc my-temps 

oc get route 

copy the whole url 
(should look like my-temps-test-project.apps.na45.prod.nextcle.com) \

Open up browser and points to http://my-temps-test-project.apps.na45.prod.nextcle.com
