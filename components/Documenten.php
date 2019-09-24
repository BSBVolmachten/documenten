<?php
namespace Bsbvolmachten\Documenten\components;

use Cms\Classes\ComponentBase;
use Bsbvolmachten\Documenten\Models\Documenten as Document;

class Documenten extends ComponentBase {

    public function componentDetails()
    {
        return [
            'name' => 'Documenten',
            'description' => 'Geeft alle documenten weer op de pagina.'
        ];
    }

    public function onRun() {
        $privateDocuments = $this->getDocumenten('Particulier');
        $businessDocuments = $this->getDocumenten('Zakelijk');
        $otherDocuments = $this->getDocumenten('Overig');

        if($privateDocuments->isNotEmpty()) {
            $this->page['privateDocuments'] = $privateDocuments;
        } else {
            $this->page['privateDocuments'] = false;
        }

        if($businessDocuments->isNotEmpty()) {
            $this->page['businessDocuments'] = $businessDocuments;
        } else {
            $this->page['businessDocuments'] = false;
        }

        if($otherDocuments->isNotEmpty()) {
            $this->page['otherDocuments'] = $otherDocuments;
        } else {
            $this->page['otherDocuments'] = false;
        }
    }

    public function getDocumenten($category)
    {
        return Document::orderBy('sort_order', 'ASC')->where('category', $category)->get();
    }

    public function defineProperties()
    {
        return [
            'privateCheck' => [
                'title'             => 'Particulier',
                'description'       => 'Laat particuliere documenten zien',
                'default'           => true,
                'type'              => 'checkbox'
            ],
            'businessCheck' => [
                'title'             => 'Zakelijk',
                'description'       => 'Laat zakelijke documenten zien',
                'default'           => true,
                'type'              => 'checkbox'
            ],
            'otherCheck' => [
                'title'             => 'Overig',
                'description'       => 'Laat overige documenten zien',
                'default'           => true,
                'type'              => 'checkbox'
            ]
        ];
    }
}