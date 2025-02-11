<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Notifier\Bridge\Firebase\Notification;

use Symfony\Component\Notifier\Bridge\Firebase\FirebaseOptions;

final class IOSNotification extends FirebaseOptions
{
    /**
     * @return $this
     */
    public function sound(string $sound): self
    {
        $this->options['sound'] = $sound;

        return $this;
    }

    /**
     * @return $this
     */
    public function badge(string $badge): self
    {
        $this->options['badge'] = $badge;

        return $this;
    }

    /**
     * @return $this
     */
    public function clickAction(string $clickAction): self
    {
        $this->options['click_action'] = $clickAction;

        return $this;
    }

    /**
     * @return $this
     */
    public function subtitle(string $subtitle): self
    {
        $this->options['subtitle'] = $subtitle;

        return $this;
    }

    /**
     * @return $this
     */
    public function bodyLocKey(string $bodyLocKey): self
    {
        $this->options['body_loc_key'] = $bodyLocKey;

        return $this;
    }

    /**
     * @param string[] $bodyLocArgs
     *
     * @return $this
     */
    public function bodyLocArgs(array $bodyLocArgs): self
    {
        $this->options['body_loc_args'] = $bodyLocArgs;

        return $this;
    }

    /**
     * @return $this
     */
    public function titleLocKey(string $titleLocKey): self
    {
        $this->options['title_loc_key'] = $titleLocKey;

        return $this;
    }

    /**
     * @param string[] $titleLocArgs
     *
     * @return $this
     */
    public function titleLocArgs(array $titleLocArgs): self
    {
        $this->options['title_loc_args'] = $titleLocArgs;

        return $this;
    }
}
