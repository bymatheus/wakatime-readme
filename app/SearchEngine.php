<?php

namespace MplusC\WakatimeReadme;

use GuzzleHttp\Client;
use stdClass;

class SearchEngine
{
    /**
     * SearchEngine constructor.
     * @param string $username
     * @param string $range
     * @param string $baseUrl
     * @param array|null $apiReturn
     * @param int|null $apiHttpStatus
     * @param array|null $newContent
     */
    public function __construct(
        private string          $username,
        private string          $range = 'last_7_days',
        private string          $baseUrl = 'https://wakatime.com/api/v1/users',

        private null|array      $apiReturn = null,
        private null|int        $apiHttpStatus = null,
        private null|array      $newContent = null
    ) {}

    public function process(): void
    {
        $this
            ->research();

        if ($this->apiHttpStatus !== 200) {
            return;
        }

        $this
            ->updateReadme();
    }

    private function research(): void
    {
        $client = new Client([
            'base_uri' => 'https://wakatime.com'
        ]);

        $response = $client
            ->request(
                "GET",
                "/api/v1/users/{$this->username}/stats/{$this->range}"
            );

        $this->apiHttpStatus = $response->getStatusCode();

        if ($this->apiHttpStatus === 200) {
            $this->apiReturn = json_decode($response->getBody(), true);
        }
    }

    private function updateReadme(): void
    {
        $this
            ->setTopReadme()
            ->putEditor()
            ->putLanguage()
            ->putOS()
            ->putCategories()
            ->setBottomReadme();

        file_put_contents(
            'README.md',
            $this->newContent
        );
    }

    private function setTopReadme(): SearchEngine
    {
        $this->newContent = file('./markdown/TOP.md');
        return $this;
    }

    private function putEditor(): SearchEngine
    {
        if (!array_key_exists('editors', $this->apiReturn['data'])) {
            return $this;
        }

        array_push(
            $this->newContent,
            "\n```text",
            "\n💡 Editor",
            "\n"
        );

        foreach ($this->apiReturn['data']['editors'] as $editor) {
            array_push(
                $this->newContent,
                $this->makeArray($editor)
            );
        }

        array_push(
            $this->newContent,
            "\n```"
        );

        return $this;
    }

    private function putLanguage(): SearchEngine
    {
        if (!array_key_exists('editors', $this->apiReturn['data'])) {
            return $this;
        }

        array_push(
            $this->newContent,
            "\n```text",
            "\n💬 Linguagem",
            "\n"
        );

        foreach ($this->apiReturn['data']['languages'] as $laguage) {
            array_push(
                $this->newContent,
                $this->makeArray($laguage)
            );
        }

        array_push(
            $this->newContent,
            "\n```"
        );
        return $this;
    }

    private function putOS(): SearchEngine
    {
        if (!array_key_exists('editors', $this->apiReturn['data'])) {
            return $this;
        }

        array_push(
            $this->newContent,
            "\n```text",
            "\n💻 Sistema Operacional",
            "\n"
        );

        foreach ($this->apiReturn['data']['operating_systems'] as $os) {
            array_push(
                $this->newContent,
                $this->makeArray($os)
            );
        }

        array_push(
            $this->newContent,
            "\n```"
        );
        return $this;
    }

    private function putCategories(): SearchEngine
    {
        if (!array_key_exists('editors', $this->apiReturn['data'])) {
            return $this;
        }

        array_push(
            $this->newContent,
            "\n```text",
            "\n📦 Categoria",
            "\n"
        );

        foreach ($this->apiReturn['data']['categories'] as $categories) {
            array_push(
                $this->newContent,
                $this->makeArray($categories)
            );
        }

        array_push(
            $this->newContent,
            "\n```"
        );
        return $this;
    }

    private function setBottomReadme(): SearchEngine
    {
        array_push($this->newContent, "\n");

        foreach (file('./markdown/BOTTOM.md') as $line) {
            array_push(
                $this->newContent,
                $line
            );
        }

        return $this;
    }

    private function generatePercentBar(float $percent)
    {
        $barQuantity = 25;
        $numberOfEmptyBlocks = intval(round($barQuantity - ($barQuantity / 100 * $percent)));
        $numberOfCompleteBlocks = intval(round($barQuantity-$numberOfEmptyBlocks));

        $block = '';
        for ($i = 1; $i <= $numberOfCompleteBlocks; $i++) {
            $block .= '█';
        }
        for ($i = 1; $i <= $numberOfEmptyBlocks; $i++) {
            $block .= '░';
        }

        return $block;
    }

    private function makeArray(array $data): string
    {
        $string = "\n";
        $string .= str_pad($data['name'], 25);
        $string .= str_pad($data['text'], 20);
        $string .= $this->generatePercentBar($data['percent']);
        $string .= str_pad($data['percent'], 10, ' ', STR_PAD_LEFT). '%';

        return $string;
    }
}