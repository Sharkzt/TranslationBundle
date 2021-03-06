<?php
/**
 * Created by anonymous
 * Date: 14/12/17
 * Time: 12:53
 */

namespace VKR\TranslationBundle\Services;

/**
 * Class Options
 */
class Options
{
    /**
     * @var bool
     */
    protected $forcedSave = false;

    /**
     * @var bool
     */
    protected $forcedSaveByGoogle = false;

    /**
     * @var array
     */
    protected $fieldsToTranslate = [];

    /**
     * @return bool
     */
    public function isForcedSave()
    {
        return $this->forcedSave;
    }

    /**
     * @param bool $forcedSave
     *
     * @return Options
     */
    public function setForcedSave($forcedSave)
    {
        $this->forcedSave = $forcedSave;

        return $this;
    }

    /**
     * @return bool
     */
    public function isForcedSaveByGoogle()
    {
        return $this->forcedSaveByGoogle;
    }

    /**
     * @param bool $forcedSaveByGoogle
     *
     * @return Options
     */
    public function setForcedSaveByGoogle($forcedSaveByGoogle)
    {
        $this->forcedSaveByGoogle = $forcedSaveByGoogle;

        return $this;
    }

    /**
     * @return array
     */
    public function getFieldsToTranslate()
    {
        return $this->fieldsToTranslate;
    }

    /**
     * @param array $fieldsToTranslate
     *
     * @return Options
     */
    public function setFieldsToTranslate($fieldsToTranslate)
    {
        $this->fieldsToTranslate = $fieldsToTranslate;

        return $this;
    }
}
