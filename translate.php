 <?php
    function translate($lang, $word){
        $vocabulary = array(
			'en' => array(
				'hello' => 'Привет',
				'open' => 'Открыть',
				'save' => 'Сохранить',
				'close the window' => 'Закрыть окно',
			),
			'ru' => array(
				'привет' => 'hello',
				'открыть' => 'open',
				'сохранить' => 'save',
				'закрыть окно' => 'close the window',
			),
		);           
                
                if (isset($vocabulary[$lang][$word]))
                    return $vocabulary[$lang][$word];
                else
                    return "<p>Такое слово не найдено в словаре<p>";
    }
    