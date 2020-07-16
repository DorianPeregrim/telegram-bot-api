<?php declare(strict_types=1);

namespace TelegramBotApi\Types;

/**
 * Class Document
 *
 * @package TelegramBotApi\Types
 */
class Document
{
    /**
     * @var string
     */
    private string $fileId;

    /**
     * @var PhotoSize
     */
    private PhotoSize $thumb;

    /**
     * @var string
     */
    private string $fileName;

    /**
     * @var string
     */
    private string $mimeType;

    /**
     * @var int
     */
    private int $fileSize;

    /**
     * @return string
     */
    public function getFileId(): string
    {
        return $this->fileId;
    }

    /**
     * @param string $fileId
     *
     * @return Document
     */
    public function setFileId(string $fileId): Document
    {
        $this->fileId = $fileId;

        return $this;
    }

    /**
     * @return PhotoSize
     */
    public function getThumb(): PhotoSize
    {
        return $this->thumb;
    }

    /**
     * @param PhotoSize $thumb
     *
     * @return Document
     */
    public function setThumb(PhotoSize $thumb): Document
    {
        $this->thumb = $thumb;

        return $this;
    }

    /**
     * @return string
     */
    public function getFileName(): string
    {
        return $this->fileName;
    }

    /**
     * @param string $fileName
     *
     * @return Document
     */
    public function setFileName(string $fileName): Document
    {
        $this->fileName = $fileName;

        return $this;
    }

    /**
     * @return string
     */
    public function getMimeType(): string
    {
        return $this->mimeType;
    }

    /**
     * @param string $mimeType
     *
     * @return Document
     */
    public function setMimeType(string $mimeType): Document
    {
        $this->mimeType = $mimeType;

        return $this;
    }

    /**
     * @return int
     */
    public function getFileSize(): int
    {
        return $this->fileSize;
    }

    /**
     * @param int $fileSize
     *
     * @return Document
     */
    public function setFileSize(int $fileSize): Document
    {
        $this->fileSize = $fileSize;

        return $this;
    }
}