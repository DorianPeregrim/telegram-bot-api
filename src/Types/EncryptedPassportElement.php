<?php declare(strict_types=1);

namespace TelegramBotApi\Types;

/**
 * Class EncryptedPassportElement
 *
 * @package TelegramBotApi\Types
 */
class EncryptedPassportElement
{
    /**
     * @var string
     */
    private string $type;

    /**
     * @var string
     */
    private string $data;

    /**
     * @var string
     */
    private string $phoneNumber;

    /**
     * @var string
     */
    private string $email;

    /**
     * @var PassportFile[]
     */
    private array $files;

    /**
     * @var PassportFile
     */
    private PassportFile $frontSide;

    /**
     * @var PassportFile
     */
    private PassportFile $reverse_side;

    /**
     * @var PassportFile
     */
    private PassportFile $selfie;

    /**
     * @var PassportFile[]
     */
    private array $translation;

    /**
     * @var string
     */
    private string $hash;

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     *
     * @return EncryptedPassportElement
     */
    public function setType(string $type): EncryptedPassportElement
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return string
     */
    public function getData(): string
    {
        return $this->data;
    }

    /**
     * @param string $data
     *
     * @return EncryptedPassportElement
     */
    public function setData(string $data): EncryptedPassportElement
    {
        $this->data = $data;

        return $this;
    }

    /**
     * @return string
     */
    public function getPhoneNumber(): string
    {
        return $this->phoneNumber;
    }

    /**
     * @param string $phoneNumber
     *
     * @return EncryptedPassportElement
     */
    public function setPhoneNumber(string $phoneNumber): EncryptedPassportElement
    {
        $this->phoneNumber = $phoneNumber;

        return $this;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     *
     * @return EncryptedPassportElement
     */
    public function setEmail(string $email): EncryptedPassportElement
    {
        $this->email = $email;

        return $this;
    }

    /**
     * @return PassportFile[]
     */
    public function getFiles(): array
    {
        return $this->files;
    }

    /**
     * @param PassportFile[] $files
     *
     * @return EncryptedPassportElement
     */
    public function setFiles(array $files): EncryptedPassportElement
    {
        $this->files = $files;

        return $this;
    }

    /**
     * @return PassportFile
     */
    public function getFrontSide(): PassportFile
    {
        return $this->frontSide;
    }

    /**
     * @param PassportFile $frontSide
     *
     * @return EncryptedPassportElement
     */
    public function setFrontSide(PassportFile $frontSide): EncryptedPassportElement
    {
        $this->frontSide = $frontSide;

        return $this;
    }

    /**
     * @return PassportFile
     */
    public function getReverseSide(): PassportFile
    {
        return $this->reverse_side;
    }

    /**
     * @param PassportFile $reverse_side
     *
     * @return EncryptedPassportElement
     */
    public function setReverseSide(PassportFile $reverse_side): EncryptedPassportElement
    {
        $this->reverse_side = $reverse_side;

        return $this;
    }

    /**
     * @return PassportFile
     */
    public function getSelfie(): PassportFile
    {
        return $this->selfie;
    }

    /**
     * @param PassportFile $selfie
     *
     * @return EncryptedPassportElement
     */
    public function setSelfie(PassportFile $selfie): EncryptedPassportElement
    {
        $this->selfie = $selfie;

        return $this;
    }

    /**
     * @return PassportFile[]
     */
    public function getTranslation(): array
    {
        return $this->translation;
    }

    /**
     * @param PassportFile[] $translation
     *
     * @return EncryptedPassportElement
     */
    public function setTranslation(array $translation): EncryptedPassportElement
    {
        $this->translation = $translation;

        return $this;
    }

    /**
     * @return string
     */
    public function getHash(): string
    {
        return $this->hash;
    }

    /**
     * @param string $hash
     *
     * @return EncryptedPassportElement
     */
    public function setHash(string $hash): EncryptedPassportElement
    {
        $this->hash = $hash;

        return $this;
    }
}
