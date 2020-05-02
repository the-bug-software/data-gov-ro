<?php

namespace TheBugSoftware\DataGovRo\Services;

use TheBugSoftware\DataGovRo\Contracts\ServiceInterface;
use TheBugSoftware\DataGovRo\Providers\ServiceProvider;

class Tag extends ServiceProvider implements ServiceInterface
{
    /**
     * @return object
     * @throws \TheBugSoftware\DataGovRo\Exceptions\RequestException
     */
    public function list()
    {
        return $this->request->get('action/tag_list')->body();
    }

    /**
     * @param string $id
     *
     * @return object
     * @throws \TheBugSoftware\DataGovRo\Exceptions\RequestException
     */
    public function show(string $id)
    {
        return $this->request->get('action/tag_show?id=' . $id)->body();
    }
}
