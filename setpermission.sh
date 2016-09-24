#!/bin/bash

sudo chgrp -R www-data runtime
sudo chmod -R 777 runtime

sudo chgrp -R www-data web/assets
sudo chmod -R 777 web/assets

sudo chgrp www-data yii
sudo chmod 755 yii

sudo chgrp -R www-data assets
sudo chmod -R 775 assets

sudo chgrp -R www-data commands
sudo chmod -R 775 commands

sudo chgrp -R www-data config
sudo chmod -R 775 config

sudo chgrp -R www-data controllers
sudo chmod -R 775 controllers

sudo chgrp -R www-data mail
sudo chmod -R 775 mail

sudo chgrp -R www-data models
sudo chmod -R 775 models

sudo chgrp -R www-data tests
sudo chmod -R 775 tests

sudo chgrp -R www-data views
sudo chmod -R 775 views

sudo chgrp -R www-data upload
sudo chmod -R 775 upload

sudo chgrp -R www-data filters
sudo chmod -R 775 filters
