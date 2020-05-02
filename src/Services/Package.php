<?php

namespace TheBugSoftware\DataGovRo\Services;

use TheBugSoftware\DataGovRo\Contracts\ServiceInterface;
use TheBugSoftware\DataGovRo\Providers\ServiceProvider;

class Package extends ServiceProvider implements ServiceInterface
{
    /**
     * @return object
     * @throws \TheBugSoftware\DataGovRo\Exceptions\RequestException
     */
    public function list()
    {
        return $this->request->get('action/package_list')->body();
    }

    /**
     * @param string $id
     *
     * @return object
     * @throws \TheBugSoftware\DataGovRo\Exceptions\RequestException
     */
    public function show(string $id)
    {
        return $this->request->get('action/package_show?id=' . $id)->body();
    }

    /**
     * @return object
     * @throws \TheBugSoftware\DataGovRo\Exceptions\RequestException
     */
    public function updated()
    {
        return $this->request->get('action/recently_changed_packages_activity_list')->body();
    }
}
