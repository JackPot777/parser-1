<?php

class Parser
{
    private $url;

    // 10. Шаг создали приватную переменную что бы сохранить сюда html код спаршеной страницы
    private $html;

    /**
     * 7. Шаг создали конструктор и засетили переменную url
     *
     * @param string $url
     */
    public function __construct(string $url)
    {
        $this->url = $url;
    }

    /**
     * 9. Шаг - Создали функцию скачивания старницы
     */
    public function downloadHtml()
    {
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_URL, $this->url);

        // 11. В переменную html сохраним результат
        $this->html = curl_exec($ch);
        curl_close($ch);
    }

    /**
     * 12. Создали публичную функцио парсинг html
     */
    public function parseHtml()
    {
        $object = str_get_html($this->html);
        if(count($object->find('.product-thumb'))) {
            foreach($object->find('.product-thumb') as $div) {
                echo $div->find('.caption a', 0)->innertext;
                echo "<br />";
            }
        }

    }

    /**
     * 13. Слздали публичную функцио сохроанение данных
     */
    public function saveData()
    {
        // TODO реализовать дома
    }
}