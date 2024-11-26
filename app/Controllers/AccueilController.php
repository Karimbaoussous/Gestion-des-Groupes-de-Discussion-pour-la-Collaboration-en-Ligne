<?php

namespace App\Controllers;

use App\Models\GroupModel;

class AccueilController extends BaseController
{
    public function index()
    {
        // Get the search query from the URL
        $searchQuery = $this->request->getGet('search');

        // Load the GroupModel
        $groupModel = new GroupModel();

        // If there is a search query, filter groups
        if ($searchQuery) {
            $data['groups'] = $groupModel->like('title', $searchQuery)
                                         ->orLike('description', $searchQuery)
                                         ->findAll();
        } else {
            // If no search query, get all groups
            $data['groups'] = $groupModel->findAll();
        }

        // Pass the search query and groups to the view
        $data['searchQuery'] = $searchQuery;

        // Load the accueil view
        return view('accueil', $data);
    }
}
