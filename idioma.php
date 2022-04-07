<?php

session_start();

if (isset($_GET['lg'])){

	$idioma = $_GET['lg'];

	if ($idioma == 'pt-br' || $idioma == 'en'){
		Idioma::setIdioma($idioma);
	}
}

$_idioma = Idioma::isPT();

//print "idioma |$_idioma|" ;

function text ($key) {
	print Idioma::getText($key);
}

class Idioma
{

  private static $TEXTOS = array (
		'en'=> array(
		  'idioma_code' => 'en',
		  'idioma' => 'English',
		  'contact_title' => 'Photo App World - Contact us',
		  'index_title' => 'Photo App World - Photo Editor Apps',
		  'picture_specialist' => 'Photo Apps Specialist',
		  'backgrounderaser_description' => 'App to clear the background of your photos. With advanced controls to erase you can get a perfect photo: using zoom, erase by color and recover details.',
		  'startup_resume' => 'Since 2012 we\'ve been developing apps for Android and iOS. Our goal is to deliver the best photo apps to the public. In 2019 we\'ve reached the mark of 65 million installs.',
		  'myfakelook_description' => 'Paint your hair, add wigs, deform faces and more with this image editor. Editing a picture has never been so funny.',
		  'blackwhite_description' => 'Change your colored image to black and white. This app has some image color filters that can convert your photos to shades of grey or black and white.',
		  'tattoo_description' => 'Best app for tattoo simulation on your photos. Use this app to test new tattoos or to have fun seeing how it would be if you had your whole body covered by tattoos.',
		  'textonphoto_description' => 'App to add texts to your photo. You can add text with background, normal texts or add texts inside a balloon simulating a dialog. This is the easy and fastest way to add text to photos using an app.',
		  'makeup_description' => 'Best makeup app for changing your look on images. Add a custom makeup for your selfie and for each person on the picture.',
		  'home' => 'Home',
		  'contact' => 'Contact',
		  'about' => 'About',
		  'about_title' => 'Photo App World - Photo Editor Apps - About Us',
		  'about_us' => 'About us',
		  'about_us_text' => 'Summary about our history developing apps for mobile devices.',
		  'about_resume' => 'We are a startup for mobile apps development fully dedicated to <b>Photo Editor apps</b>. <b>Since 2012</b> developing apps for <b>Google Play</b> and <b>Apple Store</b>.<br> Our top success app was <b>My Fake Look</b> that has been <b>downloaded</b> at least <b>thirty millions</b> of times.<br> We work with <b>digital image processing</b> and have a custom library to give to our user’s <b>solutions</b> that are <b>unique</b> and can be found only in ours apps.',
		  'address' => 'Address',
		  'queremos_ouvir' => 'We want to hear from you',
		  'alguma_questao' => 'Do you have a question or a remark? Please do not hesitate to contact us by filling out the form below.',
		  'contact_us' => 'Contact us',
		  'name' => 'Name',
		  'cutpaste_description' => 'Best app to create custom photos cutting from a picture and pasting into another. You can easily swap faces in a picture or remove photo background and put people in another photo.',
  		  'message' => 'Your message',
		  'your_name' => 'Your name',
		  'your_mail' => 'Your e-mail',
		  'invalid_mail' => 'Email address is invalid',
  		  'message_here' => 'Please enter your message here...',
  		  'og_description' => 'Apps to enhance your smartphone\'s photos.',
		  'meta_description' => 'Startup for mobile apps development dedicated to Photo Editor apps. Since 2012 developing apps for Google Play and Apple Store. There is a lot of apps available like: photo editor, face changer, my fake look, photo makeup app, black and white photo app, write text on photo app and photo tattoo simulator app.',
		  'meta_keywords' => 'photo editor app, photo editor apps, photo editor, photo filters, face changer app, photo filter app, black and white app, tattoo app, photo tattoo simulator, text on photo, add text to photo, write text on photo, app, face makeup, makeup app, Black & White Photo app, black white filter app, app startup',
  		  'whatsapp_sticker_description' => 'The best app for creating custom stickers for WhatsApp.',
				'animated_sticker_description' => 'This is the best app to create animated stickers for WhatsApp.',
		  '' => ''

		),
		'pt-br'=> array(
		  'idioma_code' => 'pt-br',
		  'idioma' => 'Português',
  		  'contact_title' => 'Photo App World - Contate-nos',
		  'index_title' => 'Photo App World - Focado em apps para edição de fotos',
		  'picture_specialist' => 'Especialista em edição de imagens',
			'backgrounderaser_description' => 'Aplicativo para limpar o fundo de suas fotos. Com os controles avançados para apagar, você pode obter uma foto perfeita: use o zoom, apague por cor e recupere detalhes.',
		  'startup_resume' => 'Desde 2012 desenvolvemos apps para Android e iOS. Nosso objetivo é entregar ao público os melhores apps para edição de imagens. Em 2019 atingimos a marca de 65 milhões de instalações.',
		  'myfakelook_description' => 'Pinte seu cabelo, adicione perucas, deforme o rosto e muito mais com esse editor de fotos. Editar uma fotografia nunca foi tão engraçado.',
		  'blackwhite_description' => 'Transforme suas fotos coloridas em preto e branco. Este app tem filtros fantásticos para transformar suas fotos para tons de cinza ou preto e branco com muito estilo.',
		  'tattoo_description' => 'Melhor app para simular tatuagem nas suas fotos. Use este app para testar novas tatuagens ou para se divertir simulando tatuagens em todo o seu corpo.',
		  'textonphoto_description' => 'App para adicionar texto na foto. Você pode adicionar texto com plano de fundo, textos normais e também adicionar textos com balões simulando diálogos. Este é o modo mais fácil e rápido de adicionar texto às fotos usando um app.',
		  'makeup_description' => 'Melhor app de maquiagem para alterar seu look em fotos. Adicione uma maquiagem personalizada à sua selfie e também para cada pessoa na foto.',
		  'home' => 'Início',
		  'contact' => 'Contato',
		  'about' => 'Sobre',
		  'about_us' => 'Sobre nós',
		  'about_title' => 'Photo App World - Apps para editar fotos - Sobre nós',
		  'about_us_text' => 'Resumo sobre a nossa trajetória no desenvolvimento de apps para dispositivos móveis.',
		   'about_resume' => 'Nós somos uma startup focada no desenvolvimento de <b>apps de fotografia</b> para smartphones. <b>Desde 2012</b> desenvolvemos apps para as lojas <b>Google Play</b> and <b>Apple Store</b>.<br>Nosso app de maior sucesso é o <b>"My Fake Look"</b>, que conta com mais de <b>trinta milhões</b> de downloads. <br> Nós trabalhamos com o <b>processamento digital de imagens</b> e possuímos uma biblioteca personalizada que permite proporcionar aos nossos usuários <b>soluções únicas</b>, encontradas apenas nos nossos apps.',
		  'address' => 'Endereço',
		  'queremos_ouvir' => 'Queremos te ouvir',
		  'alguma_questao' => 'Você tem alguma crítica, dúvida ou sugestão? Por favor, não hesite em nos contactar preenchendo os campos do formulário a seguir.',
		  'contact_us' => 'Contate-nos',
		  'name' => 'Nome',
		  'cutpaste_description' => 'Melhor aplicativo para criar fotos personalizadas cortando de uma foto e colando em outra foto. Você pode facilmente trocar rostos em uma foto ou remover o fundo da foto e colocar as pessoas em outra foto.',
  		  'message' => 'Sua mensagem',
		  'your_name' => 'Seu nome',
		  'your_mail' => 'Seu e-mail',
		  'invalid_mail' => 'E-mail inválido',
  		  'message_here' => 'Por favor, digite sua mensagem...',
		  'og_description' => 'Apps para incrementar as fotos do seu celular.',
		  'meta_description' => 'Startup para desenvolvimento de apps dedicados à edição de fotos. Desde 2012 desenvolvemos apps para o Google Play e Apple Store. Contamos com uma série de apps disponíveis como: editor de fotos, troca faces ,my fake look, app para maquiagem na foto, foto em preto e branco, escrever texto na foto e simular tatuagem na foto.',
		  'meta_keywords' => 'app para editar foto, editor de foto, edição de fotos, efeitos em fotos, alterar rosto, app foto preto e branco, app de tatuagem, simulador de tatuagem na foto, texto na foto, escrever texto foto, app, app de maquiagem no rosto, app de maquiagem, app foto preto e branco, startup apps.',
		  'whatsapp_sticker_description' => 'Melhor aplicativo para criar figurinhas personalizadas para o WhatsApp.',
			'animated_sticker_description' => 'Melhor aplicativo para criar figurinhas animadas para o WhatsApp.',
		  '' => ''
		)
	);

	public static function getText($key){

		$idioma = self::isPT();

		//error_log($idioma." = idioma");

		return self::$TEXTOS[$idioma][$key];

	}

	public static function isPT(){

		$lang = $_SERVER['HTTP_ACCEPT_LANGUAGE'];
		//$session = $_SESSION['idioma'];


		if (isset($_SESSION['idioma'])){

			$ses = $_SESSION['idioma'];

			//error_log("_SESSION : ".$ses." HTTP_ACCEPT_LANGUAGE : ".$lang);

			return $_SESSION['idioma'];
		}

		//error_log("IDIOMA HTTP_ACCEPT_LANGUAGE : ".$lang);

		if (strtolower(self::getIdioma()) == "pt"){
			return "pt-br";
		}else{
			return "en";
		}

	}

	public static function setIdioma($key){
		//error_log("setIdioma : ".$key);

		$_SESSION["idioma"] = $key;
	}

    public static function getIdioma()
    {
        //self::initialize();


	   if (isset($_SERVER['HTTP_ACCEPT_LANGUAGE'])) {
			$lang = $_SERVER['HTTP_ACCEPT_LANGUAGE'];
			return strtolower(substr($lang, 0, 2));
	   }else{
			return "en";
	   }

    }
}
//Hello::greet(); // Hello There!
?>