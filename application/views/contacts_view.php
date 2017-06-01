<div class="container-fluid">
<h1 class="page-title">Контакты</h1>
<p></p>
<i class="fa fa-skype"></i>  skype: <a title="Связаться по Skype" href="skype:valsy?call">valsy</a><br/>
github: <a class="soc-icon github" href="https://github.com/Valsym" target="_blank"><i class="fa fa-github"></i></a><br/>
<i class="fa fa-envelope-o"></i>  email: <a href="mailto:mrwadson@mail.ru" title="Отправить сообщение на эл. почту" target="_blank">simonvn@yandex.ru</a><br/>
г. Москва<br/>
<br/>
<hr class="delimiter"><div class="row">
<p>Связаться со мной можно также через контактную форму, представленную ниже.</p>
<form action="#" method="post" id="form_contact">
	<div class="row">
		<div class="col-sm-6">
			<div class="form-group">
				<label for="your-name">Ваше Имя <span class="text-danger">*</span></label>
				<input type="text" class="form-control" name="your-name" id="your-name" required="required">
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-6">
			<div class="form-group">
				<label for="your-email">Ваш Email <span class="text-danger">*</span></label>
				<input type="email" class="form-control" name="your-email" id="your-email" required="required">
			</div>
		</div>
	</div>
	
	<div class="row">
		<div class="col-sm-6">
			<div class="form-group">
				<label for="your-subject">Тема</label>
				<input type="text" class="form-control" name="your-subject" id="your-subject">
			</div>
		</div>
	</div>
	<div class="form-group">
		<label for="your-message">Ваше Сообщение</label>
		<textarea class="form-control" name="your-message" id="your-message" cols="40" rows="10">
		</textarea>
	</div>
	<button type="submit" class="btn btn-lg btn-primary">Отправить</button>
</form><br>
	<div class="alert alert-success" id="message" style="display:none"><strong>Спасибо.</strong> Ваше сообщение успешно отправлено.</div>
	
<?php extract($data); ?>
<?php if($status=="access_granted") { ?>
<p style="color:green"><strong>Спасибо.</strong> Ваше сообщение успешно отправлено.</p>
<?php } elseif($status=="access_denied") { ?>
<p style="color:red">К сожалению Ваше сообщение не было отправлено.</p>
<?php } ?>
<!--
<iframe align="left" src="https://maps.google.ru/maps?f=q&amp;source=s_q&amp;hl=ru&amp;geocode=&amp;q=%D0%91%D0%BE%D0%B1%D1%80%D1%83%D0%B9%D1%81%D0%BA,+%D0%91%D0%B5%D0%BB%D0%B0%D1%80%D1%83%D1%81%D1%8C&amp;sll=53.174971,29.250412&amp;sspn=0.127788,0.363579&amp;ie=UTF8&amp;hq=&amp;hnear=%D0%91%D0%BE%D0%B1%D1%80%D1%83%D0%B9%D1%81%D0%BA,+%D0%9C%D0%BE%D0%B3%D0%B8%D0%BB%D1%91%D0%B2%D1%81%D0%BA%D0%B0%D1%8F+%D0%BE%D0%B1%D0%BB%D0%B0%D1%81%D1%82%D1%8C,+%D0%91%D0%B5%D0%BB%D0%B0%D1%80%D1%83%D1%81%D1%8C&amp;ll=53.163,29.241&amp;spn=0.063897,0.181789&amp;t=m&amp;z=13&amp;iwloc=A&amp;output=embed"
frameborder="0" marginwidth="0" marginheight="0" scrolling="no" align="right" width="450" height="380">
</iframe>
-->
</div></div>
