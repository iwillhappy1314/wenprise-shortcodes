<?php

namespace Wenprise\Shortcode;

use Nette\Utils\Html;

class Element
{

    /**
     * 显示几种不同类型的分割线
     *
     * @param $atts
     *
     * @package shortcode
     *
     * @usage [divider type="solid"]
     *
     * @return string 经简码格式化后的 HTML 字符串
     */
    public function divider($atts)
    {
        $default = [
            'type' => 'solid',
        ];
        extract(shortcode_atts($default, $atts));

        $class = 'ui-divider';

        if ($type) {
            $class .= ' ui-divider-' . $type;
            $class .= ' c-divider--' . $type;
        }

        $html = Html::el('div')
                    ->setAttribute('class', $class)
                    ->addText($content);

        return $html;
    }

    /**
     * 显示几种不同类型的分割线
     *
     * @param $atts
     *
     * @package shortcode
     *
     * @usage [heading type="background" content="这是二级标题"]
     *
     * @return string 经简码格式化后的 HTML 字符串
     */
    public function heading($atts)
    {
        $default = [
            'type'    => 'background',
            'content' => '这是二级标题',
        ];
        extract(shortcode_atts($default, $atts));

        $class = 'ui-heading';

        if ($type) {
            $class .= ' ui-heading-' . $type;
            $class .= ' c-heading--' . $type;
        }

        // 输出
        $html = Html::el('h2')
                    ->setAttribute('class', $class)
                    ->addText($content);

        return $html;
    }

    /**
     * 显示几种不同类型的分割线
     *
     * @param $atts
     *
     * @package shortcode
     *
     * @usage [alert type="success" content="这是提示信息"]
     *
     * @return string 经简码格式化后的 HTML 字符串
     */
    public function alert($atts)
    {
        $default = [
            'type'    => 'info',
            'content' => '这是提示信息。',
        ];

        extract(shortcode_atts($default, $atts));

        $class = 'alert';

        if ($type) {
            $class .= ' alert-' . $type;
            $class .= ' alert--' . $type;
            $class .= ' c-alert--' . $type;
        }

        $html = Html::el('div')
                    ->setAttribute('class', $class)
                    ->addHtml($content);

        return $html;
    }

    /**
     * 显示链接按钮
     *
     * @param $atts
     *
     * @package shortcode
     *
     * @usage [button type="success" size='' text="这是链接" url="http://www.baidu.com"]
     *
     * @return string 经简码格式化后的 HTML 字符串
     */
    public function button($atts)
    {
        $default = [
            'type'   => 'success',
            'size'   => '',
            'text'   => '这是链接',
            'url'    => 'http://',
            'target' => '_blank',
        ];

        $merged_attrs = shortcode_atts($default, $atts);
        $html_attrs   = array_except($merged_attrs, ['type', 'size', 'url', 'text']);

        extract($merged_attrs);

        $class = 'btn button';

        if ($type) {
            $class .= ' btn-' . $type;
            $class .= ' btn--' . $type;
            $class .= ' button--' . $type;
        }

        if ($size) {
            $class .= ' btn-' . $size;
            $class .= ' btn--' . $size;
            $class .= ' button--' . $size;
        }

        $el = Html::el('a')
                  ->href($url)
                  ->setAttribute('class', $class)
                  ->addAttributes($html_attrs)
                  ->addText($text);

        return $el;
    }

}