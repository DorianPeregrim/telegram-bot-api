<?php declare(strict_types=1);

namespace TelegramBotApi\Types;

/**
 * Class PassportFile
 *
 * @package TelegramBotApi\Types
 */
class PassportFile
{
    /**
     * @var string
     */
    private $fileId;

    /**
     * @var int
     */
    private $fileSize;

    /**
     * @var int
     */
    private $fileDate;

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
     * @return PassportFile
     */
    public function setFileId(string $fileId): PassportFile
    {
        $this->fileId = $fileId;

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
     * @return PassportFile
     */
    public function setFileSize(int $fileSize): PassportFile
    {
        $this->fileSize = $fileSize;

        return $this;
    }

    /**
     * @return int
     */
    public function getFileDate(): int
    {
        return $this->fileDate;
    }

    /**
     * @param int $fileDate
     *
     * @return PassportFile
     */
    public function setFileDate(int $fileDate): PassportFile
    {
        $this->fileDate = $fileDate;

        return $this;
    }
}
