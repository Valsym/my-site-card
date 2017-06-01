<?php

class Model_Services extends Model
{
	
	public function get_data()
	{	
		
		// Здесь мы просто сэмулируем реальные данные.
		
		return array(
			
			array(
				'Year' => '1978 - 1984',
				'Firm' => 'Московский Энергетический Институт',
				'Post' => 'Студент',
				'Description' => 'Окончил Энергофизический факультет по специальности инженерная теплофизика. В частности сдал на "Отлично" экзамен по предмету: "Теория и практика применения ЭВМ"'
			),
			array(
				'Year' => '1984 - 1991',
				'Firm' => 'Научно-Исследовательский и Конструкторский Институт Энерготехники',
				'Post' => 'Инженер 2 кат.',
				'Description' => 'Моделирование на языке программирования "Фортран" теплофизических процессов в теплоносителе, внутри охлаждающего контура реактора.'
			),

			array(
				'Year' => '1991 - 1992',
				'Firm' => 'ООО "Информатик"',
				'Post' => 'Программист',
				'Description' => 'Разработка турбо-редактора на языке програмирования "Паскаль" в команде разработчиков системы проверки правописания "ОРФО".'
			),

			array(
				'Year' => '1992 - 1998',
				'Firm' => 'РНЦ "Курчатовский Институт"',
				'Post' => 'Научный сотрудник',
				'Description' => 'Научно-исследовательская деятельность, связанная с теплофизическими процессами в охлаждающих контурах реакторов ВВЭР.'
			),

			array(
				'Year' => '1998 - 2011',
				'Firm' => 'Работа не по специальности',
				'Post' => 'Менеджер; Директор',
				'Description' => 'Работал менеджером и руководил фирмами в сфере оптово-розничной торговли.'
			),

			array(
				'Year' => '2011 - 2017',
				'Firm' => 'Индивидуальный Предприниматель',
				'Post' => 'Программист; Веб-мастер; Веб-дизайнер; Админ-сайтов; Главный редактор; контент-менеджер, СЕО и т.п.',
				'Description' => 'Веб-разработка, веб-дизайн, создание и верстка собственных веб-сайтов в основном на CMS Worpress (на текущий момент поддерживаю 18 действующих сайтов), а также интерфейсов и скриптов к ним на PHP & JavaScript. СЕО-оптимизация, продвижение в ПС и соц.сетях.'
			),


		);
	}

}
