<?php

/*
 * This file is part of Bootstrap CMS.
 *
 * (c) Graham Campbell <graham@mineuk.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace GrahamCampbell\BootstrapCMS\Presenters;

use GrahamCampbell\Credentials\Presenters\AuthorPresenterTrait;
use McCool\LaravelAutoPresenter\BasePresenter;

/**
 * This is the post presenter class.
 *
 * @author Graham Campbell <graham@mineuk.com>
 */
class PostPresenter extends BasePresenter
{
    use AuthorPresenterTrait, OwnerPresenterTrait, ContentPresenterTrait;
}
