<?php
<<<<<<< HEAD
/**
 * Team: RedHackers,NKU
 * Coding by Rui Zhou 1511388, 20170704
 * This is the member display of frontend web.
 */
=======

/**
 * Team: RedHackers,NKU
 * Coding by Xiang Li 1511376, 20170704
 * This is the main display of frontend web.
 */

>>>>>>> a0d61432f20fc8f6e61e693fc5cd043dfc548ee1
/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>
<!-- content-Get-in-touch -->
<div id="contact" id="arrow" class="content-Get-in-touch">
		<!-- container -->
		<div class="container">
			<div class="Get-in-touch-text">
				<h2>Get <small>in touch</small></h2>
				<span class="portfolio"; style="height:114px; important!"> </span>
			</div>
			<div class="Get-in-touch-grids">
				<div class="col-md-6">
					<div class="rh-note-record-form">

    					<?php $form = ActiveForm::begin(); ?>

    					<?= $form->field($model, 'user_name')->textInput(['maxlength' => true]) ?>

    					<?= $form->field($model, 'note_email')->textInput(['maxlength' => true]) ?>

    					<?= $form->field($model, 'note_content')->textarea(['rows' => 6]) ?>

    					<div class="form-group">
       						 <?= Html::submitButton('留言', ['class' => 'btn btn-success']) ?>
    					</div>

    					<?php ActiveForm::end(); ?>

					</div>
				</div>
				<div class="col-md-6">
					<div class="Get-in-touch-right-grid">
						<p>
							追逐于信息安全与法学,<br>
							执着于渗透利用与漏洞,<br>
							思索于过去现在与将来,<br>
							成长于自己社会与所在.<br>
							RedHackers团队,前进于安全的道路上,不断拼搏!
						</p>
						<h4>南开大学 计算机与控制工程学院.<br>
							信息安全与法学专业.<br>
							中国 天津 津南.
						</h4>
						<span>I: idealeer521@gmail.com</span>
						<small>Q: idealeer@qq.com</small>
						<div class="Get-in-touch-icons">
							<a href="#"><span class="icon1"> </span></a>
							<a href="#"><span class="icon2"> </span></a>
							<a href="#"><span class="icon3"> </span></a>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<!-- // container -->
</div>
	<!-- // content-Get-in-touch -->



