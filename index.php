<!DOCTYPE html>
<html class="fp-enabled" lang="ru" style="overflow: hidden; height: 100%;">

<head>
	<meta charset="UTF-8">
	<title>GG RP | GTA 5 Role Play</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<meta name="description"
		content="GG RolePlay — Первый в России GTA 5 RP проект, имеющий 1600 активных слотов и стабильный голосовой чат. Присоединяйтесь к нам, мы - лучшие!">
	<meta name="keywords"
		content="RP, РП, RolePlay, Рол плей, Role Play, GTA 5, GTA V, ГТА 5, GG RP, Онлайн, Мультиплеер, gg rp, гэгэ эрпэ, гэгэ, Голосовой чат, войс чат">
	<link href="css/slick.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/fullpage.css" rel="stylesheet">
	<link rel="stylesheet" href="css/css-OverlayScrollbars.min.css">
	<link rel="stylesheet" href="css/css-modals.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>
	<link href="favicon.ico" rel="shortcut icon">
	<link href="css/themes/semantic.rtl.min.css" rel="stylesheet">
	<script src="js/jquery-1.11.3.min.js">
	</script>
	<script src="js/fm.revealator.jquery.min.js">
	</script>
	<script src="js/jquery-ui.js">
	</script>
	<meta name="verification" content="112b975da7ed3348325403186301de" />
	<script>
		jQuery(function ($) {

			var index = 'qpsstats-active-tab';
			var dataStore = window.sessionStorage;
			var oldIndex = 0;

			var tabs = $('.about_tabs');
			var tabs_select = true;
			var selector = $(".about_tabs").find(".slide__ggrp");
			var activeItem = tabs.find('.about_tabs li .ui-state-active');
			var activeWidth = activeItem.innerWidth();

			$(".slide__ggrp").css({
				"left": activeItem.position.left + "px",
				"width": activeWidth + "px"
			});




			try {
				oldIndex = dataStore.getItem(index);
				$('#ggrp_slide').addClass('animated fadeInLeft tabs' + oldIndex);
				$('#ggrp_slide').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend',
					function () {
						$(this).removeClass('animated fadeInLeft');
					});
			} catch (e) {}


			$("#tabs").tabs({
				active: oldIndex,
				hide: {
					effect: "fade",
					duration: 200
				},
				show: {
					function (event, ui) {

						alert('2');
					},
					effect: "fade",
					direction: "right",
					duration: 200
				},
				activate: function (event, ui) {
					tabs_select = false;

					var newIndex = ui.newTab.parent().children().index(ui.newTab);

					$('#ggrp_slide').removeClass();
					$('#ggrp_slide').addClass('animated fadeInLeft tabs' + newIndex);
					$('#ggrp_slide').one(
						'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend',
						function () {
							$(this).removeClass('animated fadeInLeft');
						});
					var isn = $('.ui-tabs-active');
					var activeWidth = isn.innerWidth();
					var itemPos = isn.position();
					$(".slide__ggrp").css({
						"left": itemPos.left + "px",
						"width": activeWidth + "px"
					});


					try {
						dataStore.setItem(index, newIndex);
					} catch (e) {}
					tabs_select = true;
				}
			})

			window.onload = function () {
				var elm = $(".revealator-slideright");
				elm.css('transform', 'translate(0, 0)').css('opacity', '1').css('z-index', '1');
			};


			function slider_tabs() {
				var elm = $(".ui-state-active");
				var activeWidth = elm.innerWidth();
				var itemPos = elm.position();
				$(".slide__ggrp").css({
					"left": itemPos.left + "px",
					"width": activeWidth + "px"
				});
			}
			window.onresize = function (event) {
				slider_tabs();
			};


			slider_tabs();
		})

		function monitoring(){
												var ip = '137.74.80.171',  	//	Ip адрес сервера
												  port = 22005; 			//	Port сервера 
												  $.getJSON('https://ml.rage.mp/servers', function(data) {
													  $.each(data, function(key, val) {
														  if(ip == val.ip && port == val.port) {
															  document.write('JavaScript<hr>Id: '+val._id);	
															  document.write('<br>Название: '+val.name);
															  document.write('<br>Слотов: '+val.slots);
															  document.write('<br>Игроков: '+val.players);
															  document.write('<br>Uptime: '+val.uptime);
															  return false;				
														  }
													  });
												  });
											  }
	</script>
	<style>
		.ajs-message.ajs-default_rd {
			background: rgba(166, 166, 166, 0.65);
			color: #fff;
			border: none;
			border-radius: 6px;
		}

		.container_item__play:nth-child(3) .btn__play {
			pointer-events: none;
		}
	</style>

	<meta name="yandex-verification" content="fe0edfe396221c45" />

</head>

<body class="layout fp-viewing-intro fp-responsive isUnregUser animate__fadeIn" style="overflow: hidden; height: 100%;">
	<div id="p_prldr">
		<div class="contpre"><span class="svg_anm"></span><br>Подождите<br><small>идет загрузка</small></div>
	</div>
	<div class="layout__header">
		<div class="container">
			<div class="header" id="myMenu">
				<div class="header__content">
					<div class="header__logo">
						<a class="logo active" href=" #home"></a>
					</div>
					<div class="header__bars">
						<div class="bars js-controller" data-controlled=".header__links"></div>
					</div>
				</div>
				<div class="header__links">
					<div class="header__nav">
						<div class="nav">
							<a class="nav__link" data-menuanchor="home" href=" #home">Главная</a> <a
								class="nav__link" data-menuanchor="about-the-project"
								href=" #about-the-project">О проекте</a> <a class="nav__link"
								data-menuanchor="How-to-start-playing" href=" #How-to-start-playing">Как играть
								?</a>
							<a class="nav__link" data-menuanchor="news" href=" #news">Новости</a>
							<a class="nav__link" data-menuanchor="footer" href=" #footer">Контакты</a>
							<a class="nav__link" href="https://forum.gg-rp.ru/">Форум</a> <a
								class="nav__link nav__link_donate trigger-two" href="#modalPayment">Донат</a> <a
								class="nav__link nav__link_donate__mob" href="#modalPayment">Донат</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="layout__content">
		<div class="content fullpage-wrapper" id="fullpage">
			<div class="section content__slide_home fp-section fp-table" data-anchor="home" data-fp-styles="null">
				<div class="fp-tableCell">
					<div class="pxl">
						<div id="scene">
							<div class="slide-main__bg" data-depth="0.2"></div>
						</div>
					</div>
					<div class="slide-content slide-content_home container">
						<div class="home slide-content__content wrapper">
							<div class="home__main revealator-slideright revealator-once">
								<h1 class="home__title h1">
									GGRP
								</h1>
								<h2 class="home__text h2__home">
									Комплекс RolePlay серверов в GTA 5 на платформе Rage MP.
								</h2>
								<div class="home__button">
									<a class="primary_btn gradient_btn__orange start_play"
										href=" #How-to-start-playing">Начать играть</a>
									<div class="video_play">
										<div class="video_play__lds">
											<a class="modal-video-ggrp"
												href="https://www.youtube.com/watch?v=Uk0Dw4Wv2ls">
												<div class="lds-css ng-scope">
													<div class="lds-eclipse" style="width:100%;height:100%">
														<div></div>
													</div>
												</div>
											</a>
										</div>
									</div>
								</div>
								<div class="systemRequir modalOpens trigger" data-modal_name="modalSystem">
									Системные
									требования</div>
								<div class="server" id="serv_upd">
									<div class="serv__rd" id="upd_Black">
										<div class="serv__rd__title h2">
											Smile
										</div>
										<div class="serv__rd__text">
											Игроков: <span><script>
												monitoring();</script></span>
										</div>
										<div class="serv__rd__line">
											<span class="gradient_btn__orange"></span>
										</div>
										<div class="serv__rd__text">
											IP сервера:
										</div>
										<div class="serv__rd__ip" id="serv_Black">
											<span>137.74.80.171:22005</span><a href=" #"
												onclick="CopyToClipboard('serv_Black')">Скопировать ip</a>
										</div>
									</div>
								</div>
							</div>
							<div class="per__main">
								<div class="person__right revealator-slideleft revealator-delay2 revealator-once">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="section content__slide__about fp-section fp-table" data-anchor="about-the-project"
				data-fp-styles="null">
				<div class="fp-tableCell">
					<div class="pxl">
						<div id="scene2">
							<div class="slide-main__about" data-depth="0.2"></div>
						</div>
					</div>
					<div class="slide-content slide-content_about container">
						<div class="about-the-project slide-content__content wrapper">
							<div
								class="about-the-project__main slide-content__content-main slide-content__content-main_max-width container__about">
								<div class="slide_tabs tabs0" id="ggrp_slide"></div>
							</div>
							<div class="slide-content__content-side">
								<div class="about_tabs" id="tabs">
									<ul>
										<li class="tabs-1">
											<a href=" #tabs-1"><span></span></a>
										</li>
										<li class="tabs-2">
											<a href=" #tabs-2"><span></span></a>
										</li>
										<li class="tabs-3">
											<a href=" #tabs-3"><span></span></a>
										</li>
										<li id='slider'><span class="slide__ggrp"></span></li>
									</ul>
									<div class="tabs-container-wrapper">
										<div class="tabs-container">
											<div id="tabs-1">
												<div class="h_tabs">
													Особенность игры
												</div>
												<p>На нашем GTA V RP проекте представлен совершенно новый, ни на что не
													похожий игровой мод – совокупность отлаженных игровых качеств и
													технических возможностей. Легкий в освоении, интересный в развитии,
													а главное – полностью уникальный. Забудь про команды, ведь мы
													предоставляем возможность пользоваться приятными и удобными
													графическими интерфейсами, позволяя тебе отыгрывать РП на совершенно
													ином уровне, чем, например, во вселенной SA:MP или в любом другом
													Role Play сеттинге.</p>
											</div>
											<div id="tabs-2">
												<div class="h_tabs">
													Администрация
												</div>
												<p>Каждый из нас знаком с таким явлением, как недоброжелательная и
													несправедливая администрация на серверах ГТА 5 и не только, которая
													убивает всё желание играть и развиваться. В нашем случае всё иначе:
													Администраторы ежедневно общаются с комьюнити, узнают положительные
													и отрицательные качества сервера и передают фидбэк разработчикам, а
													во время игрового процесса качественно решают конфликтные ситуации и
													следят за порядком.</p>
											</div>
											<div id="tabs-3">
												<div class="h_tabs">
													Войс-Чат
												</div>
												<p>В связи с тем, что платформа RAGE:MP открывает новые перспективы и
													возможности, на нашем проекте был реализован полноценный голосовой
													чат. С помощью него происходит всё основное взаимодействие людей в
													рамках игрового процесса. Теперь каждый желающий имеет возможность
													полностью погрузиться в настоящую GTA 5 Role Play атмосферу, получая
													от этого максимальное удовольствие!</p>
											</div>
											<div class="button">
												<a class="btn gradient_btn__orange btn__tabs" href="https://vk.com/ggrpgta5"
													target="_blank">Узнать большее</a> <a
													class="btn btn_rond_orange btn__tabs modal-video-ggrp"
													href="https://www.youtube.com/watch?v=Uk0Dw4Wv2ls">Видео о
													проекте</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="section content__slide__playing fp-section fp-table" data-anchor="How-to-start-playing"
				data-fp-styles="null">
				<div class="bg-play"></div>
				<div class="fp-tableCell">
					<div class="slide-content slide-content_playing container wrapper">
						<div class="playing slide-content__content">
							<div class="slide-content__content-side">
								<div class="md">
									<div class="h_tabs">
										Как начать играть?
									</div>
									<p>GTA V RP — новый уровень онлайн-игр. Играй бандитом или полицейским, чиновником
										или медиком, мафией или сотрудником ФБР. Прочувствуй атмосферу удивительного
										мира ролевой игры с реалистичным миром GTA 5!</p>
								</div>
							</div>
							<div class="md_bt">
								<div class="video_play__play">
									<div class="video_play__lds__play">
										<a class="modal-video-ggrp" href="https://www.youtube.com/watch?v=Uk0Dw4Wv2ls">
											<div class="lds-css ng-scope">
												<div class="lds-eclipse__play" style="width:100%;height:100%">
													<div></div>
												</div>
											</div>
										</a>
									</div>
								</div>
							</div>
						</div>
						<div class="page__width__play">
							<div class="container__play">
								<div class="container_item__play">
									<img alt="content" src="images/content/play_1.png">
									<div class="block">
										<h3 class="block__heading">Установите лицензионную GTA 5</h3>
										<p class="block__content">Для игры на сервере подойдет любая версия GTA 5 (Steam
											или Social Club) <span>Также для игры подойдет любой забаненный аккаунт GTA
												5.</span></p>
									</div><a class="btn__play gradient_btn__orange"
										href="https://store.steampowered.com/app/271590/Grand_Theft_Auto_V/"
										target="_blank"><span class="ic__download"></span> Купить GTA 5</a>
								</div>
								<div class="container_item__play">
									<img alt="content" src="images/content/play_2.png">
									<div class="block">
										<h3 class="block__heading">Установите мультиплеер Rage</h3>
										<p class="block__content">Далее вам потребуется скачать и установить RAGE:MP. Он
											бесплатный.</p>
									</div>
									<!-- Вставить ссылку в href -->
									<a class="btn__play gradient_btn__orange download__multiplayer"
										href="https://cdn.rage.mp/public/files/RAGEMultiplayer_Setup.exe"><span class="ic__download"></span> Скачать мультиплеер</a>
								</div>
								<div class="container_item__play">
									<img alt="content" src="images/content/play_3.png">
									<div class="block">
										<h3 class="block__heading">Найдите GGRP</h3>
										<p class="block__content">Чтобы найти наш сервер, вам надо открыть мультиплеер и
											нажать на кнопку “Серверы” и найти по названю “GGRP”. </p>
											<!-- Вставить ссылку в href -->
									</div><a class="btn__play gradient_btn__orange" href=" #"
										style="background: rgba(255, 255, 255, 0.2);box-shadow: none;"><span
											class="ic__chain"></span> Подключиться на сервер</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="section content__slide__news fp-section fp-table" data-anchor="news" data-fp-styles="null">
				<div class="fp-tableCell">
					<div class="slide-content slide-content_news container">
						<div class="news slide-content__content wrapper">
							<div
								class="news__main slide-content__content-main slide-content__content-main_max-width container__news">
								<div class="title__h">
									Обновления проекта
								</div>
								<div class="news__blocks">
									<a class="news__block" href="https://vk.com/@ggrpgta5-inventar"
										target="_blank">
										<div class="hv"><img alt="content" src="images/content/unknown.png"></div>
										<div class="desc__news">
											<div class="h__t">
												Инвентарь
											</div>
											<div class="h__desc">
												<span>Дата публикации:</span> <span>16.06.2020</span>
											</div>
										</div>
										<div class="border"></div>
									</a> <a class="news__block" href="https://vk.com/@ggrpgta5-interery" target="_blank">
										<div class="hv"><img alt="content"
												src="images/content/Desktop_Screenshot_2020.06.16_-_11.01.33.25.png">
										</div>
										<div class="desc__news">
											<div class="h__t">
												Интерьеры
											</div>
											<div class="h__desc">
												<span>Дата публикации:</span> <span>15.06.2020</span>
											</div>
										</div>
										<div class="border"></div>
									</a><a class="news__block" href="https://vk.com/@ggrpgta5-rybalka" target="_blank">
										<div class="hv"><img alt="content" src="images/content/-sjewtP_oIw.png">
										</div>
										<div class="desc__news">
											<div class="h__t">
												Рыбалка
											</div>
											<div class="h__desc">
												<span>Дата публикации:</span> <span>14.06.2020</span>
											</div>
										</div>
										<div class="border"></div>
									</a>
								</div>
								<a class="btn_rond btn__news" target="_blank" href="https://vk.com/ggrpgta5">Больше
									новостей</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="section content__slide__footer fp-section fp-table" data-anchor="footer" data-fp-styles="null">
				<div class="fp-tableCell">
					<div class="slide-content slide-content_footer container wrapper">
						<div class="footer slide-content__content">
							<div class="slide-content__content-side footer">
								<div class="md_l footer_page">
									<div class="h_tabs">
										Следите за нами
									</div>
									<p>Подписывайтесь, чтобы быть всегда вкурсе событий!</p>
								</div>
								<ul class="md_l contact_blc">
									<li class="contact">
										<a href="https://vk.com/ggrpgta5" target="_blank"><img alt="vk" class="img"
												src="images/vk.png">
											<div class="grow">
												<div class="h">
													Официальная страница Вконтакте
												</div>
												<p>Все главные новости касательно проекта.</p>
											</div>
											<div class="btn btn_rond_orange">
												Подписаться
											</div>
										</a>
									</li>
									<li class="contact">
										<a href="https://vk.me/join/AJQ1d0Dm7BeoHs3IFLOl90TY" target="_blank"><img alt="vk" class="img"
												src="images/chat.png">
											<div class="grow">
												<div class="h">
													Беседа игроков
												</div>
												<p>Чат общения игроков проекта.
												</p>
											</div>
											<div class="btn btn_rond_orange">
												Вступить
											</div>
										</a>
									</li>
									<li class="contact">
										<a href="https://www.youtube.com/channel/UCPMQDPADI6PnOmKNnr9GHqQ"
											target="_blank"><img alt="youtube" class="img" src="images/youtube.png">
											<div class="grow">
												<div class="h">
													Youtube канал
												</div>
												<p>Сборник видео-гайдов, прямые трансляции с командой проекта и обзоры
													обновлений.</p>
											</div>
											<div class="btn btn_rond_orange">
												Смотреть
											</div>
										</a>
									</li>
									<li class="contact">
										<a href="https://discord.com/invite/p6xqvCu" target="_blank"><img alt="discord"
												class="img" src="images/discord.png">
											<div class="grow">
												<div class="h">
													Канал Discord
												</div>
												<p>Найди друзей из игры и узнавай все новости первым.</p>
											</div>
											<div class="btn btn_rond_orange">
												Подключиться
											</div>
										</a>
									</li>
								</ul>
							</div>
							<footer class="footer">
								<div class="footer-content">
									<img alt="logo_white" class="logo_white" src="images/logo.png">
								</div>
								<div class="footer-content__contacts">
									<a href="https://discord.com/invite/p6xqvCu"><svg class="first"
											xmlns="http://www.w3.org/2000/svg" width="70" height="78"
											viewBox="0 0 70 78" fill="none">
											<path
												d="M27.7618 32.6865C26.8672 32.6121 25.9706 32.8051 25.1894 33.2401C24.4083 33.6752 23.779 34.3321 23.384 35.1248C22.989 35.9175 22.8467 36.8089 22.9757 37.6825C23.1048 38.556 23.4991 39.3709 24.1072 40.0203C24.7152 40.6697 25.5086 41.1235 26.3833 41.3221C27.2581 41.5207 28.1735 41.4549 29.0096 41.1334C29.8457 40.8118 30.5635 40.2495 31.0691 39.52C31.5746 38.7906 31.8443 37.928 31.8428 37.0453C31.8659 36.4957 31.7787 35.9469 31.5862 35.4303C31.3936 34.9138 31.0994 34.4396 30.7205 34.0349C30.3415 33.6301 29.8852 33.3027 29.3775 33.0713C28.8699 32.84 28.3208 32.7092 27.7618 32.6865V32.6865ZM42.3614 32.6865C41.4669 32.6121 40.5703 32.8051 39.7891 33.2401C39.008 33.6752 38.3787 34.3321 37.9837 35.1248C37.5886 35.9175 37.4464 36.8089 37.5754 37.6825C37.7044 38.556 38.0988 39.3709 38.7068 40.0203C39.3149 40.6697 40.1082 41.1235 40.983 41.3221C41.8578 41.5207 42.7732 41.4549 43.6093 41.1334C44.4454 40.8118 45.1632 40.2495 45.6687 39.52C46.1743 38.7906 46.444 37.928 46.4424 37.0453C46.4656 36.4957 46.3784 35.9469 46.1858 35.4303C45.9933 34.9138 45.6991 34.4396 45.3202 34.0349C44.9412 33.6301 44.4849 33.3027 43.9772 33.0713C43.4695 32.84 42.9205 32.7092 42.3614 32.6865V32.6865Z"
												fill="white" />
											<path
												d="M61.8007 1.18241e-05H8.19933C6.02925 -0.00364299 3.94651 0.840113 2.40897 2.34579C0.871434 3.85146 0.00494569 5.89582 0 8.02942V60.762C0.00494569 62.8956 0.871434 64.94 2.40897 66.4456C3.94651 67.9513 6.02925 68.7951 8.19933 68.7914H53.5593L51.4383 61.5764L56.5577 66.2174L61.397 70.5762L70 78V8.02942C69.9951 5.89582 69.1286 3.85146 67.591 2.34579C66.0535 0.840113 63.9707 -0.00364299 61.8007 1.18241e-05V1.18241e-05ZM46.361 50.9294C46.361 50.9294 44.9213 49.2524 43.722 47.7704C46.6134 47.1084 49.1747 45.465 50.9553 43.1294C49.5148 44.0615 47.9721 44.831 46.3563 45.4235C44.4942 46.1983 42.548 46.761 40.5557 47.1005C37.1294 47.7155 33.617 47.7023 30.1957 47.0615C28.1881 46.6786 26.22 46.1173 24.3157 45.3845C23.3131 45.0085 22.3378 44.5655 21.3967 44.0585C21.2777 43.9805 21.1633 43.9415 21.0373 43.8635C20.9769 43.8345 20.9223 43.7948 20.8763 43.7465C20.1553 43.3565 19.7563 43.0835 19.7563 43.0835C21.4741 45.3714 23.9495 46.9989 26.7563 47.6855C25.557 49.1675 24.0753 50.9225 24.0753 50.9225C21.7039 50.9893 19.3519 50.4838 17.225 49.4504C15.0981 48.4171 13.261 46.8872 11.8743 44.9945C12.0065 37.0828 13.9771 29.3056 17.6353 22.2575C20.8645 19.7888 24.7893 18.3588 28.875 18.1625L29.274 18.6214C25.4292 19.5475 21.8378 21.2914 18.753 23.7304C18.753 23.7304 19.6327 23.2715 21.112 22.5994C23.9893 21.3193 27.0527 20.4902 30.191 20.1424C30.4146 20.0972 30.6418 20.0711 30.87 20.0644C33.5508 19.7238 36.2633 19.6976 38.9503 19.9864C43.1724 20.4559 47.2615 21.7274 50.9903 23.7304C48.0622 21.4074 44.6677 19.7195 41.0293 18.7774L41.5893 18.1534C45.675 18.3496 49.5998 19.7796 52.829 22.2484C56.4873 29.2964 58.4578 37.0737 58.59 44.9854C57.1953 46.8775 55.3531 48.4074 53.2225 49.443C51.0919 50.4786 48.737 50.9887 46.361 50.9294V50.9294Z"
												fill="white" />
										</svg></a>
									<a href="https://vk.com/ggrpgta5"><svg xmlns="http://www.w3.org/2000/svg" width="67" height="38"
											viewBox="0 0 67 38" fill="none">
											<g clip-path="url(#clip0)">
												<path fill-rule="evenodd" clip-rule="evenodd"
													d="M57.6622 24.1611C59.9605 26.2527 62.1505 28.4603 64.2238 30.7753C65.1273 31.8193 65.9157 32.9577 66.5755 34.1708C67.4688 35.9255 66.6603 37.8568 65.0903 37.9708H55.3306C54.1697 38.0585 53.0043 37.8757 51.9258 37.4367C50.8474 36.9977 49.8854 36.3143 49.1153 35.4404C47.7641 34.0612 46.5134 32.5926 45.2136 31.1665C44.6974 30.5723 44.1075 30.0465 43.4582 29.6018C43.2128 29.3822 42.9178 29.2254 42.5986 29.1448C42.2793 29.0641 41.9453 29.062 41.6251 29.1387C41.3049 29.2153 41.008 29.3685 40.7598 29.585C40.5116 29.8015 40.3194 30.0749 40.1998 30.3819C39.5115 31.8042 39.1599 33.3661 39.1725 34.9464C39.0675 37.251 38.3729 37.8523 36.0637 37.9618C31.2186 38.3407 26.3685 37.2942 22.1098 34.9509C18.3907 32.7054 15.1868 29.6998 12.7075 26.1304C7.80902 19.2282 3.66197 11.8216 0.337046 4.03677C-0.444621 2.29547 0.127112 1.35442 2.04555 1.3276C5.23028 1.26501 8.41278 1.26948 11.602 1.3276C12.1973 1.33468 12.7749 1.53101 13.2515 1.88821C13.728 2.24541 14.0787 2.74499 14.2529 3.31477C15.9423 7.56017 18.1156 11.5962 20.7296 15.3429C21.3809 16.3812 22.2129 17.2943 23.1863 18.0386C23.3751 18.2334 23.6134 18.3728 23.8756 18.4417C24.1378 18.5107 24.4138 18.5067 24.6738 18.43C24.9339 18.3534 25.1681 18.2071 25.3511 18.0069C25.5341 17.8068 25.6589 17.5603 25.7122 17.2943C26.0295 16.4874 26.2194 15.636 26.275 14.7707C26.5705 11.8271 26.518 8.85903 26.1186 5.92783C26.0574 5.09389 25.7144 4.30564 25.1462 3.69264C24.578 3.07963 23.8183 2.67834 22.992 2.55476C22.0584 2.37817 22.1969 2.02947 22.6503 1.49524C22.9856 1.01676 23.4349 0.629597 23.9575 0.368857C24.48 0.108117 25.0594 -0.0179557 25.6429 0.00206058H36.6734C38.4109 0.346296 38.795 1.11971 39.034 2.87889V15.1596C39.0161 15.8302 39.3712 17.8419 40.5973 18.289C41.5733 18.6086 42.2143 17.8263 42.7994 17.2071C45.3379 14.3483 47.4317 11.1231 49.0103 7.64006C49.7585 6.129 50.3994 4.5576 51.0203 2.99066C51.1704 2.45832 51.5022 1.99547 51.958 1.68264C52.4138 1.36981 52.9647 1.22677 53.5149 1.27841H64.1322C64.4459 1.27068 64.7597 1.28938 65.0702 1.3343C66.8569 1.64053 67.3504 2.41171 66.7966 4.16194C65.7903 6.81739 64.3652 9.29423 62.5756 11.4982C60.8045 13.957 58.9107 16.3242 57.1553 18.7942C55.5428 21.0496 55.6701 22.1874 57.6734 24.1455L57.6622 24.1611Z"
													fill="white" />
											</g>
											<defs>
												<clipPath id="clip0">
													<rect width="67" height="38" fill="white" />
												</clipPath>
											</defs>
										</svg></a>
									<a href="https://www.youtube.com/channel/UCPMQDPADI6PnOmKNnr9GHqQ"><svg xmlns="http://www.w3.org/2000/svg" width="59" height="41"
											viewBox="0 0 59 41" fill="none">
											<path
												d="M56.701 3.51991C54.5711 1.02086 50.6397 0.00561523 43.131 0.00561523H15.871C8.1892 0.00561523 4.19097 1.09114 2.06893 3.75224C0 6.3411 0 10.1658 0 15.4568V25.5428C0 35.7947 2.4544 40.9998 15.871 40.9998H43.129C49.6406 40.9998 53.2495 40.0997 55.5839 37.8935C57.9793 35.6307 59 31.9368 59 25.5428V15.4568C59 9.87686 58.8407 6.03067 56.701 3.51991ZM37.878 21.8918L25.4998 28.2761C25.2104 28.4261 24.887 28.4997 24.5606 28.4898C24.2343 28.4799 23.916 28.3869 23.6364 28.2197C23.3567 28.0524 23.1251 27.8166 22.9637 27.5348C22.8024 27.253 22.7167 26.9348 22.715 26.6107V13.8792C22.715 13.5559 22.7993 13.238 22.9595 12.9565C23.1197 12.675 23.3505 12.4393 23.6295 12.2724C23.909 12.1048 24.2271 12.011 24.5535 12.0001C24.8799 11.9892 25.2036 12.0614 25.4939 12.21L37.8721 18.5571C38.1804 18.7148 38.4391 18.9536 38.6197 19.2476C38.8003 19.5415 38.8958 19.8792 38.8958 20.2235C38.8958 20.5678 38.8003 20.9055 38.6197 21.1994C38.4391 21.4934 38.1804 21.7322 37.8721 21.8899L37.878 21.8918Z"
												fill="white" />
										</svg></a>
								</div>
								<div>
									<a href="//showstreams.tv/"><img src="//www.free-kassa.ru/img/fk_btn/6.png"
											title="Free Cassa"></a>
								</div>
							</footer>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="modalContainer animate__fadeIn">
		<div class="modalWrap modalSystem mymodal modal-wrapper animate__fadeIn" id="modalSystem">
			<div class="modal overlay">
				<div class="modalHeader content">
					<div class="emptyBlockerForFlex"></div>
					<div class="modalHeader-titleContainer">
						<div class="modalHeader-title">&#1057;&#1080;&#1089;&#1090;&#1077;&#1084;&#1085;&#1099;&#1077;
							&#1090;&#1088;&#1077;&#1073;&#1086;&#1074;&#1072;&#1085;&#1080;&#1103;</div>
					</div>
					<img src="images/images-crossIcon.svg" class="crossIcon trigger" alt="">
				</div>
				<div class="modalContent">
					<div class="modalSystem-titles">
						<div>&#1052;&#1080;&#1085;&#1080;&#1084;&#1072;&#1083;&#1100;&#1085;&#1099;&#1077;</div>
						<div><img src="images/images-circleCheckIcon.svg" alt="">
							&#1056;&#1077;&#1082;&#1086;&#1084;&#1077;&#1085;&#1076;&#1091;&#1077;&#1084;&#1099;&#1077;
						</div>
					</div>
					<div class="modalSystem-valuesWrap scrolled">
						<div class="modalSystem-values">
							<div class="modalSystem-titles modalSystem-titlesMobile">
								<div>&#1052;&#1080;&#1085;&#1080;&#1084;&#1072;&#1083;&#1100;&#1085;&#1099;&#1077;</div>
							</div>
							<ul class="modalSystem-valuesMinContainer">
								<li class="modalSystem-value">
									<img src="images/images-systemIcon-1.svg" alt="">
									<div class="modalSystem-valueTitles">
										<div class="modalSystem-value_title">
											&#1054;&#1087;&#1077;&#1088;&#1072;&#1094;&#1080;&#1086;&#1085;&#1085;&#1072;&#1103;
											&#1089;&#1080;&#1089;&#1090;&#1077;&#1084;&#1072;</div>
										<div class="modalSystem-value_subtitle">Windows 8.1 x64, Windows 10 x64</div>
									</div>
								</li>
								<li class="modalSystem-value">
									<img src="images/images-systemIcon-2.svg" alt="">
									<div class="modalSystem-valueTitles">
										<div class="modalSystem-value_title">
											&#1055;&#1088;&#1086;&#1094;&#1077;&#1089;&#1089;&#1086;&#1088;</div>
										<div class="modalSystem-value_subtitle">Intel Core 2 Duo 2.2 GHz, AMD Phenom 2.2
											GHz</div>
									</div>
								</li>
								<li class="modalSystem-value">
									<img src="images/images-systemIcon-3.svg" alt="">
									<div class="modalSystem-valueTitles">
										<div class="modalSystem-value_title">
											&#1042;&#1080;&#1076;&#1077;&#1086;&#1082;&#1072;&#1088;&#1090;&#1072;</div>
										<div class="modalSystem-value_subtitle">GTX 550 TI, ATI Radeon HD 4800</div>
									</div>
								</li>
								<li class="modalSystem-value">
									<img src="images/images-systemIcon-4.svg" alt="">
									<div class="modalSystem-valueTitles">
										<div class="modalSystem-value_title">
											&#1054;&#1087;&#1077;&#1088;&#1072;&#1090;&#1080;&#1074;&#1085;&#1072;&#1103;
											&#1087;&#1072;&#1084;&#1103;&#1090;&#1100;</div>
										<div class="modalSystem-value_subtitle">8&#1043;&#1041; DDR2</div>
									</div>
								</li>
								<li class="modalSystem-value">
									<img src="images/images-systemIcon-5.svg" alt="">
									<div class="modalSystem-valueTitles">
										<div class="modalSystem-value_title">
											&#1056;&#1072;&#1079;&#1088;&#1077;&#1096;&#1077;&#1085;&#1080;&#1077;
											&#1101;&#1082;&#1088;&#1072;&#1085;&#1072;</div>
										<div class="modalSystem-value_subtitle">1280&#1093;720</div>
									</div>
								</li>
								<li class="modalSystem-value">
									<img src="images/images-systemIcon-6.svg" alt="">
									<div class="modalSystem-valueTitles">
										<div class="modalSystem-value_title">
											&#1047;&#1074;&#1091;&#1082;&#1086;&#1074;&#1072;&#1103;
											&#1082;&#1072;&#1088;&#1090;&#1072;</div>
										<div class="modalSystem-value_subtitle">
											&#1057;&#1086;&#1074;&#1084;&#1077;&#1089;&#1090;&#1080;&#1084;&#1072;&#1103;
											&#1089; DirectX 9</div>
									</div>
								</li>
								<li class="modalSystem-value">
									<img src="images/images-systemIcon-7.svg" alt="">
									<div class="modalSystem-valueTitles">
										<div class="modalSystem-value_title">
											&#1048;&#1085;&#1090;&#1077;&#1088;&#1085;&#1077;&#1090;-&#1089;&#1086;&#1077;&#1076;&#1080;&#1085;&#1077;&#1085;&#1080;&#1077;
										</div>
										<div class="modalSystem-value_subtitle">8
											&#1084;&#1073;&#1080;&#1090;/&#1089;&#1077;&#1082;</div>
									</div>
								</li>
								<li class="modalSystem-value">
									<img src="images/images-systemIcon-8.svg" alt="">
									<div class="modalSystem-valueTitles">
										<div class="modalSystem-value_title">
											&#1057;&#1074;&#1086;&#1073;&#1086;&#1076;&#1085;&#1086;&#1077;
											&#1084;&#1077;&#1089;&#1090;&#1086; &#1085;&#1072;
											&#1085;&#1072;&#1082;&#1086;&#1087;&#1080;&#1090;&#1077;&#1083;&#1077;</div>
										<div class="modalSystem-value_subtitle">20&#1043;&#1041;</div>
									</div>
								</li>
							</ul>
							<div class="modalSystem-titles modalSystem-titlesMobile modalSystem-titlesMobileRecommend">
								<div><img src="images/images-circleCheckIcon.svg" alt="">
									&#1056;&#1077;&#1082;&#1086;&#1084;&#1077;&#1085;&#1076;&#1091;&#1077;&#1084;&#1099;&#1077;
								</div>
							</div>
							<ul class="modalSystem-valuesRecommendContainer">
								<li class="modalSystem-value">
									<img src="images/images-systemIcon-1.svg" alt="">
									<div class="modalSystem-valueTitles">
										<div class="modalSystem-value_title">
											&#1054;&#1087;&#1077;&#1088;&#1072;&#1094;&#1080;&#1086;&#1085;&#1085;&#1072;&#1103;
											&#1089;&#1080;&#1089;&#1090;&#1077;&#1084;&#1072;</div>
										<div class="modalSystem-value_subtitle">Windows 10 x64</div>
									</div>
								</li>
								<li class="modalSystem-value">
									<img src="images/images-systemIcon-2.svg" alt="">
									<div class="modalSystem-valueTitles">
										<div class="modalSystem-value_title">
											&#1055;&#1088;&#1086;&#1094;&#1077;&#1089;&#1089;&#1086;&#1088;</div>
										<div class="modalSystem-value_subtitle">Intel Core i5 3GHz, AMD Ryzen 3GHz</div>
									</div>
								</li>
								<li class="modalSystem-value">
									<img src="images/images-systemIcon-3.svg" alt="">
									<div class="modalSystem-valueTitles">
										<div class="modalSystem-value_title">
											&#1042;&#1080;&#1076;&#1077;&#1086;&#1082;&#1072;&#1088;&#1090;&#1072;</div>
										<div class="modalSystem-value_subtitle">nVidia GTX 1050 Ti, AMD RX 460</div>
									</div>
								</li>
								<li class="modalSystem-value">
									<img src="images/images-systemIcon-4.svg" alt="">
									<div class="modalSystem-valueTitles">
										<div class="modalSystem-value_title">
											&#1054;&#1087;&#1077;&#1088;&#1072;&#1090;&#1080;&#1074;&#1085;&#1072;&#1103;
											&#1087;&#1072;&#1084;&#1103;&#1090;&#1100;</div>
										<div class="modalSystem-value_subtitle">16&#1043;&#1041; DDR4</div>
									</div>
								</li>
								<li class="modalSystem-value">
									<img src="images/images-systemIcon-5.svg" alt="">
									<div class="modalSystem-valueTitles">
										<div class="modalSystem-value_title">
											&#1056;&#1072;&#1079;&#1088;&#1077;&#1096;&#1077;&#1085;&#1080;&#1077;
											&#1101;&#1082;&#1088;&#1072;&#1085;&#1072;</div>
										<div class="modalSystem-value_subtitle">1920&#1093;1080</div>
									</div>
								</li>
								<li class="modalSystem-value">
									<img src="images/images-systemIcon-6.svg" alt="">
									<div class="modalSystem-valueTitles">
										<div class="modalSystem-value_title">
											&#1047;&#1074;&#1091;&#1082;&#1086;&#1074;&#1072;&#1103;
											&#1082;&#1072;&#1088;&#1090;&#1072;</div>
										<div class="modalSystem-value_subtitle">
											&#1057;&#1086;&#1074;&#1084;&#1077;&#1089;&#1090;&#1080;&#1084;&#1072;&#1103;
											&#1089; DirectX 9</div>
									</div>
								</li>
								<li class="modalSystem-value">
									<img src="images/images-systemIcon-7.svg" alt="">
									<div class="modalSystem-valueTitles">
										<div class="modalSystem-value_title">
											&#1048;&#1085;&#1090;&#1077;&#1088;&#1085;&#1077;&#1090;-&#1089;&#1086;&#1077;&#1076;&#1080;&#1085;&#1077;&#1085;&#1080;&#1077;
										</div>
										<div class="modalSystem-value_subtitle">
											50&#1084;&#1073;&#1080;&#1090;/&#1089;&#1077;&#1082;</div>
									</div>
								</li>
								<li class="modalSystem-value">
									<img src="images/images-systemIcon-8.svg" alt="">
									<div class="modalSystem-valueTitles">
										<div class="modalSystem-value_title">
											&#1057;&#1074;&#1086;&#1073;&#1086;&#1076;&#1085;&#1086;&#1077;
											&#1084;&#1077;&#1089;&#1090;&#1086; &#1085;&#1072;
											&#1085;&#1072;&#1082;&#1086;&#1087;&#1080;&#1090;&#1077;&#1083;&#1077;</div>
										<div class="modalSystem-value_subtitle">48&#1043;&#1041;</div>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="modalContainer-2 animate__fadeIn">
	<div class="modalWrap modalPayment">
		<div class="modal">
		   <div class="modalHeader">
			   <div class="emptyBlockerForFlex"></div>
			   <div class="modalHeader-titleContainer">
				   <div class="modalHeader-title">Пополнить счет</div>
				   <div class="modalHeader-subtitle modalPaymentInfoActivator">
					   ИНФОРМАЦИЯ
					   <svg id="right_arrow" data-name="right arrow" xmlns="http://www.w3.org/2000/svg" width="30"
						   height="30" viewBox="0 0 30 30">
						   <g id="arrow-back">
							   <path id="Path_155" data-name="Path 155"
								   d="M0,13.125H22.875l-10.5-10.5L15,0,30,15,15,30l-2.625-2.625,10.5-10.5H0Z">
							   </path>
						   </g>
					   </svg></div>
			   </div>
			   <img src="images/images-crossIcon.svg" class="crossIcon trigger-two" id="closePopup" alt="">
		   </div>
		   <div class="modalContent ">
			   <div class="paymentContentWrapper scrolled os-host os-theme-dark os-host-resize-disabled os-host-scrollbar-horizontal-hidden os-host-scrollbar-vertical-hidden os-host-transition"
				   style="">
				   <div class="os-resize-observer-host">
					   <div class="os-resize-observer observed" style="left: 0px; right: auto;"></div>
				   </div>
				   <div class="os-size-auto-observer" style="height: calc(100% + 1px); float: left;">
					   <div class="os-resize-observer observed"></div>
				   </div>
				   <div class="os-content-glue" style="margin: 0px; height: 361px; width: 802px;"></div>
				   <div class="os-padding">
					   <div class="os-viewport os-viewport-native-scrollbars-invisible"
						   style="right: 0px; bottom: 0px;">
						   <div class="os-content" style="padding: 0px; height: auto; width: 100%;">
							   <div>
								   <div class="inputFieldContainer">
									   <div class="inputFieldTitles">
										   <div class="inputFieldTitle">СЕРВЕР ДЛЯ ПОПОЛНЕНИЯ:</div>
										   <div class="inputFieldDesc"></div>
									   </div>
									   <div
										   class="inputFieldWrapper customSelectContainer serverPaymentSelectContainer">
										   <select
											   class="customSelect serverInput serverPaymentSelect"></select><span
											   class="inputFieldResult inputFieldResult-wrong">
											   <span>Необходимо выбрать сервер</span>
										   </span>
									   </div>
								   </div>
								   <div class="paymentContent">
									   <ul class="paymentOptions">
										   <li>
											   <div class="paymentOption">
												   <div><img src="images/images-payment-money-1.svg"
														   class="paymentOption-moneyImg" alt=""></div>
												   <div>Вы получите:</div>
												   <div class="paymentOptions-donate"><span
														   class="paymentOption_sum">100</span> <img
														   src="images/images-donateIcon.svg" alt=""></div>
											   </div>
										   </li>
										   <li>
											   <div class="paymentOption">
												   <div><img src="images/images-payment-money-2.svg"
														   class="paymentOption-moneyImg" alt=""></div>
												   <div>Вы получите:</div>
												   <div class="paymentOptions-donate"><span
														   class="paymentOption_sum">250</span> <img
														   src="images/images-donateIcon.svg" alt=""></div>
											   </div>
										   </li>
										   <li>
											   <div class="paymentOption">
												   <div><img src="images/images-payment-money-3.svg"
														   class="paymentOption-moneyImg" alt=""></div>
												   <div>Вы получите:</div>
												   <div class="paymentOptions-donate"><span
														   class="paymentOption_sum">500</span> <img
														   src="images/images-donateIcon.svg" alt=""></div>
											   </div>
										   </li>
										   <li>
											   <div class="paymentOption">
												   <div><img src="images/images-payment-money-4.svg"
														   class="paymentOption-moneyImg" alt=""></div>
												   <div>Вы получите:</div>
												   <div class="paymentOptions-donate"><span
														   class="paymentOption_sum">1000</span> <img
														   src="images/images-donateIcon.svg" alt=""></div>
											   </div>
										   </li>
										   <li>
											   <div class="paymentOption">
												   <div><img src="images/images-payment-money-5.svg"
														   class="paymentOption-moneyImg" alt=""></div>
												   <div>Вы получите:</div>
												   <div class="paymentOptions-donate"><span
														   class="paymentOption_sum">2000</span> <img
														   src="images/images-donateIcon.svg" alt=""></div>
											   </div>
										   </li>
										   <li>
											   <div class="paymentOption">
												   <div><img src="images/images-payment-money-6.svg"
														   class="paymentOption-moneyImg" alt=""></div>
												   <div>Вы получите:</div>
												   <div class="paymentOptions-donate"><span
														   class="paymentOption_sum">5000</span> <img
														   src="images/images-donateIcon.svg" alt=""></div>
											   </div>
										   </li>
									   </ul>
									   <div class="paymentBorder"></div>
									   <div class="infoFormContainer">
										   <div class="inputFieldTitle">ПЛАТЕЖНАЯ ИНФОРМАЦИЯ:</div>
										   <div class="paymentInfoConvertTitle">
											   <div>1 РЕАЛЬНЫЙ РУБЛЬ = 1 <img src="images/images-donateIcon.svg"
													   alt=""></div>
											   <div>1 <img src="images/images-donateIcon.svg" alt=""> = 1000 <img
													   src="images/images-moneyIcon.svg" alt=""></div>
										   </div>
										   <div class="paymentInfoConvertDesc">
											   Мы работаем со всеми популярными системами платежей:
											   Банковские карты (VISA, MasterCard, Мир); WebMoney; ЯндексДеньги;
											   Qiwi; SMS-платежи и др.
										   </div>
										   <hr>
										   <div class="inputFieldContainer inputFieldContainerModalPaymentSum">
											   <div class="inputFieldTitles">
												   <div class="inputFieldTitle">ДРУГАЯ СУММА:</div>
												   <div class="inputFieldDesc"></div>
											   </div>
											   <div class="inputFieldWrapper inputField-paymentSum">
												   <input class="modalPaymentSum" type="text"
													   placeholder="Введите свою сумму" data-lpignore="true"><span
													   class="inputFieldResult inputFieldResult-wrong">
													   <span>Некорректная сумма</span>
												   </span>
											   </div>
										   </div>
										   <div class="checkAgreeContainer inputFieldContainerModalPaymentAgree">
											   <label>
												   <input class="modalPaymentAgree" type="checkbox"
													   data-lpignore="true"><span></span>
											   </label>
											   <span>Я согласен с <span class="modalOpens"
													   data-modal_name="modalOffer"
													   data-prev_modal="modalPayment">Лицензионным
													   соглашением</span></span>
										   </div>
									   </div>
								   </div>
							   </div>
						   </div>
					   </div>
				   </div>
				   <div class="os-scrollbar os-scrollbar-horizontal os-scrollbar-unusable">
					   <div class="os-scrollbar-track os-scrollbar-track-off">
						   <div class="os-scrollbar-handle" style="transform: translate(0px, 0px); width: 100%;">
						   </div>
					   </div>
				   </div>
				   <div class="os-scrollbar os-scrollbar-vertical os-scrollbar-unusable">
					   <div class="os-scrollbar-track os-scrollbar-track-off">
						   <div class="os-scrollbar-handle"
							   style="transform: translate(0px, 0px); height: 99.723%;"></div>
					   </div>
				   </div>
				   <div class="os-scrollbar-corner"></div>
			   </div>
			   <div class="modalContentPaymentUnreg">
				   <div class="modalContentPaymentUnreg-title">Чтобы пополнить игровой баланс, вам необходимо
					   ввести логин и сумму пополнения. Далее вы будете переадресованы в платёжную систему. Также
					   не забудьте выйти из игры перед пополнением баланса!</div>
				   <div class="unregForm">
					   <form action="http://gg-rp.ru/test/index.php">
						   <input name="action" value="fk_go" class="main_input" type="hidden"
							   data-lpignore="true">
						   <div class="inputFieldContainer inputFieldContainerModalPaymentLogLogin">
							   <div class="inputFieldWrapper inputField-login">
								   <input class="modalPaymentLogLogin main_input" name="account"
									   placeholder="Введите игровой логин" type="text" data-lpignore="true"><br>
							   </div>
						   </div>
						   <div class="inputFieldContainer inputFieldContainerModalPaymentLogPassword">
							   <div class="inputFieldWrapper inputField-password">
								   <input name="sum" placeholder="Введите сумму пополнения" class="main_input "
									   type="text" data-lpignore="true"><br>
							   </div>
						   </div>
						   <div class="unregForm-enterBtnContainer">
							   <button class="dl_btn unregForm-enterBtn modalPaymentLogBtn">Оплатить</button>
						   </div>
					   </form>
				   </div>
			   </div>
			   <div class="paymentDescWindow">
				   <div class="infoFormContainer">
					   <div class="premiumDescriptions_headerBack paymentDescBlock-return">
						   <svg id="left_arrow" data-name="left arrow" xmlns="http://www.w3.org/2000/svg"
							   width="30" height="30" viewBox="0 0 30 30">
							   <g id="arrow-back">
								   <path id="Path_155" data-name="Path 155"
									   d="M30,13.125H7.125l10.5-10.5L15,0,0,15,15,30l2.625-2.625-10.5-10.5H30Z">
								   </path>
							   </g>
						   </svg>
						   Вернуться
					   </div>
					   <div class="inputFieldTitle">ПЛАТЕЖНАЯ ИНФОРМАЦИЯ:</div>
					   <div class="paymentInfoConvertTitle">
						   <div>1 РЕАЛЬНЫЙ РУБЛЬ = 1 <img src="images/images-donateIcon.svg" alt=""></div>
						   <div>1 <img src="images/images-donateIcon.svg" alt=""> = 1000 <img
								   src="images/images-moneyIcon.svg" alt=""></div>
					   </div>
					   <div class="paymentInfoConvertDesc">
						   Мы работаем со всеми популярными системами платежей:
						   Банковские карты (VISA, MasterCard, Мир); WebMoney; ЯндексДеньги; Qiwi; SMS-платежи и
						   др.
					   </div>
				   </div>
			   </div>
		   </div>
	   </div>
   </div> 
</div>

	<link href="css/slick-theme.css" rel="stylesheet">
	<link href="css/fm.revealator.jquery.css" rel="stylesheet">
	<link href="css/animate.css" rel="stylesheet">
	<link href="css/magnific-popup.css" rel="stylesheet">
	<link href="css/alertify.min.css" rel="stylesheet">
	<script src="js/alertify.min.js">
	</script>
	<script src="js/jquery.js">
	</script>
	<script src="js/fastmark.js">
	</script>
	<script src="js/fullpage.js">
	</script>
	<script src="js/parallax.js">
	</script>
	<script src="js/main.js">
	</script>
	<script src="js/slick.min.js">
	</script>
	<script src="js/js-jquery.overlayScrollbars.min.js"></script>
	<script src="js/js-main.js"></script>
	<script src="js/jquery.magnific-popup.js">
	</script>
	<script>
		$(document).ready(function () {
			
			function resizeInput() {
				$(this).attr('size', $(this).val().length);
				$('#ok').text($(this).val());
			}

			$('.width-dynamic')
				// event handler
				.keyup(resizeInput)
				// resize on page load
				.each(resizeInput);

			$('.server').slick({
				dots: false,
				infinite: false,
				speed: 300,
				slidesToShow: 3,
				slidesToScroll: 3,
				variableWidth: true,
				arrows: false,
				responsive: [{
						breakpoint: 1024,
						settings: {
							slidesToShow: 2,
							slidesToScroll: 2,
							infinite: true,
							dots: false
						}
					},
					{
						breakpoint: 600,
						settings: {
							slidesToShow: 1,
							slidesToScroll: 1
						}
					},
					{
						breakpoint: 480,
						settings: {
							slidesToShow: 1,
							slidesToScroll: 1
						}
					}

				]
			});


			//
			$('.modal').magnificPopup({
				type: 'inline',
				removalDelay: 300,
				mainClass: 'my-mfp-zoom-in',
				fixedContentPos: false
			});

			//
			$('.modal_blur').magnificPopup({
				type: 'inline',
				removalDelay: 300,
				mainClass: 'my-mfp-zoom-in',
				fixedContentPos: false,
				callbacks: {
					open: function () {
						$('.layout__content').css('filter', 'blur(10px)');
						$('.layout__header').css('filter', 'blur(10px)');
					},
					close: function () {
						$('.layout__content').css('filter', 'blur(0px)');
						$('.layout__header').css('filter', 'blur(0px)');
					}
				}
			});

			$('.modal-video-ggrp').magnificPopup({
				type: 'iframe',
				fixedContentPos: false,
				iframe: {
					markup: '<div class="mfp-iframe-scaler">' +
						'<div class="mfp-close"><\/div>' +
						'<iframe class="mfp-iframe" frameborder="0" allowfullscreen><\/iframe>' +
						'<\/div>', // HTML markup of popup, `mfp-close` will be replaced by the close button
					patterns: {
						youtube: {
							index: 'youtube.com/', // String that detects type of video (in this case YouTube). Simply via url.indexOf(index).

							id: 'v=', // String that splits URL in a two parts, second part should be %id%
							// Or null - full URL will be returned
							// Or a function that should return %id%, for example:
							// id: function(url) { return 'parsed id'; }

							src: '//www.youtube.com/embed/%id%?autoplay=1' // URL that will be set as a source for iframe.
						},
						vimeo: {
							index: 'vimeo.com/',
							id: '/',
							src: '//player.vimeo.com/video/%id%?autoplay=1'
						},
						gmaps: {
							index: '//maps.google.',
							src: '%id%&output=embed'
						}

						// you may add here more sources

					},

					srcAction: 'iframe_src', // Templating object key. First part defines CSS selector, second attribute. "iframe_src" means: find "iframe" and set attribute "src".
				}


			});

		});




		var Interval = 10000;
		var timer = setInterval(get_server, Interval);

		function get_server() {

			var srv_rds = {
				'1': {
					'ip': '51.68.154.173',
					'name': 'Black'
				},
				'2': {
					'ip': '51.68.154.188',
					'name': 'White'
				}
			};

			var jqxhr = $.getJSON('https://cdn.rage.mp/master/', function (data) {

				jqxhr.success(function () {

					$.each(data, function (ind, val) {

						$.each(srv_rds, function (indx, valx) {

							if (ind.indexOf(srv_rds[indx]['ip']) + 1) {

								for (var s in val) {
									if (val.hasOwnProperty(s)) {

										var maxplayers = val['maxplayers'];
										var players = val['players'];
										var proc = maxplayers / 100;
										var width = players / proc;

									}
								}

								$('#upd_' + srv_rds[indx]['name'] + ' .serv__rd__ip span')
									.text(ind);
								$('#upd_' + srv_rds[indx]['name'] + ' .serv__rd__text span')
									.html(players + ' / ' + maxplayers);
								$('#upd_' + srv_rds[indx]['name'] + ' .serv__rd__line span')
									.css('width', width + '%');

								delete srv_rds[ind];

							}

						});

					});

				})

				jqxhr.error(function () {
					console.log("no connection");
				})

				$.each(srv_rds, function (index, value) {
					$('#upd_' + srv_rds[index]['name'] + ' .serv__rd__text span').html(
						'<span style="color:red;">Выключен</span>');
					$('#upd_' + srv_rds[index]['name'] + ' .serv__rd__line span').css('width', '0%');
				});

			});

			if (!jqxhr) {
				$.each(srv_rds, function (index, value) {
					$('#upd_' + srv_rds[index]['name'] + ' .serv__rd__text span').html(
						'<span style="color:red;">Выключен</span>');
					$('#upd_' + srv_rds[index]['name'] + ' .serv__rd__line span').css('width', '0%');
				});
			}
		}

		get_server();

		$(".download__multiplayer").click(function () {
			window.location = 'https://cdn.gtanet.work/RAGE_Multiplayer.zip';
		});


		function CopyToClipboard(containerid) {
			var ct = $('#' + containerid + ' span');
			var a = $('#' + containerid + ' a');
			var prevHtml = a.html();
			var $temp = $("<input style='opacity:0;'>");
			$("body").append($temp);
			$temp.val(ct.text()).select();
			document.execCommand("copy");
			$temp.remove();
			a.text('Скопирован!');
			setTimeout(function () {
				$('#' + containerid + ' a').text(prevHtml)
			}, 700)
		}

		$(".not_private").on('click', function () {
			alertify.notify('Данный раздел в разработке :)', 'default_rd', 3);
			$('.js-controller').removeClass('active');
		});

		get_server();

		// open modal
		var wrap = $('#modalSystem'),
			btn = $('.open-modal-btn'),
			modal = $('.cover, .modal, .content');

		btn.on('click', function () {
			modal.fadeIn();
		});

		// close modal
		$('.modalSystem').click(function () {
			wrap.on('click', function (event) {
				modal.fadeOut();
				wrap.unbind('click');
			});
		});
	</script>

	<script>
		$(window).on('load', function () {
			var $preloader = $('#p_prldr'),
				$svg_anm = $preloader.find('.svg_anm');
			$svg_anm.fadeOut();
			$preloader.delay(500).fadeOut('slow');
		});
	</script>

	<!— Yandex.Metrika counter —>
		<script type="text/javascript">
			(function (m, e, t, r, i, k, a) {
				m[i] = m[i] || function () {
					(m[i].a = m[i].a || []).push(arguments)
				};
				m[i].l = 1 * new Date();
				k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(
					k, a)
			})
			(window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

			ym(53059735, "init", {
				clickmap: true,
				trackLinks: true,
				accurateTrackBounce: true,
				webvisor: true
			});
		</script>
		<noscript>
			<div><img src="https://mc.yandex.ru/watch/53059735" style="position:absolute; left:-9999px;" alt="" /></div>
		</noscript>
		<!— /Yandex.Metrika counter —>

			<div id="fp-nav">
				<ul></ul>
			</div>
</body>

</html>