<?php

namespace App\EventSubscriber;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpKernel\Event\ResponseEvent;

class MaintenanceSubscriber implements EventSubscriberInterface
{
    private $maintenanceEnabled;

    public function __construct(bool $maintenanceEnabled)
    {
        $this->maintenanceEnabled = $maintenanceEnabled;
    }

    public function onKernelResponse(ResponseEvent $event)
    {
        // dd($this->maintenanceEnabled);
        // Ici on check si maintenanceEnabled est a false
        // Si il est a false, on quitte la methode
        // sinon, ca veut dire que le site n'est pas en maintenance alors on poursuis le code
        if ($this->maintenanceEnabled === false) {
            return;
        }
        // Ici on recupere la reponse
        $response = $event->getResponse();

        // Ici on recupere le contenu de la reponse
        $content = $response->getContent();

        // On remplace le code de la banniere juste apres la balise body du contenu HTML
        $newHtml = str_replace(
            // Qu'est ce qu'on cherche ?
            '<body>',
            // Par quoi on le remplace
            '<body><div class="alert alert-danger">Maintenance prévue mardi 10 janvier à 17h00</div>',
            // Dans quelle chaine ?
            $content
        );
        //On assigne notre nouveau contenu html a la reponse
        $response->setContent($newHtml);
    }

    public static function getSubscribedEvents()
    {
        return [
            'kernel.response' => 'onKernelResponse',
        ];
    }
}
