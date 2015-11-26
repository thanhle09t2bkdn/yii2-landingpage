<?php
Yii::setAlias('approot', dirname(dirname(__DIR__)));
Yii::setAlias('common', dirname(__DIR__));
Yii::setAlias('frontend', dirname(dirname(__DIR__)) . '/frontend');
Yii::setAlias('backend', dirname(dirname(__DIR__)) . '/backend');
Yii::setAlias('console', dirname(dirname(__DIR__)) . '/console');
Yii::setAlias('uploadPath', '@frontend/web/uploads');
Yii::setAlias('uploadUrl', '/interview-app/frontend/web/uploads');
