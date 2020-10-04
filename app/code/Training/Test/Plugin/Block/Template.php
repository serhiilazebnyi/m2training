<?php

namespace Training\Test\Plugin\Block;

use Magento\Framework\View\Element\Template;

class Template
{
    public function afterToHtml(
        Template $subject,
        $result
    ) {
        if ($subject->getNameInLayout() == 'top.search') {
            $result = '<div><p>' . $subject->getTemplate() . '</p>'
            . '<p>' . get_class($subject) . '</p>' . $result . '</div>';
        }
        
        return $result; // Афтер плагин всегда должен возвращать результат
    }
}