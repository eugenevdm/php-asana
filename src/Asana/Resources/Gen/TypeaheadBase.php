<?php

namespace Asana\Resources\Gen;

class TypeaheadBase {

    /**
     * @param Asana/Client client  The client instance
     */
    public function __construct($client)
    {
        $this->client = $client;
    }

    /** Get objects via typeahead
     *
     * @param $workspace_gid string:  (required) Globally unique identifier for the workspace or organization.
     * @param $params object
     * @return response
     */
    public function typeaheadForWorkspace($workspace_gid, $params = array(), $options = array()) {
        $path = "/workspaces/{workspace_gid}/typeahead";
        $path = str_replace($path,"{workspace_gid}", $workspace_gid);
        return $this->client->getCollection($path, $params, $options);
    }
}