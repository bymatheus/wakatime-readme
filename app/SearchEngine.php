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
        private string          $username = '@bymatheus',
        private string          $range = 'last_7_days',
        private string          $baseUrl = 'https://wakatime.com/api/v1/users',

        private null|array      $apiReturn = null,
        private null|int        $apiHttpStatus = null,
        private null|array      $newContent = null
    ) {}

    public function process(): void
    {
        $this->research();

        if ($this->apiHttpStatus !== 200) {
            return;
        }

        $this->updateReadme();
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

    private function updateReadme(): SearchEngine
    {
        $this->newContent = file('intro.txt');

        $this
            ->putEditor()
            ->putLanguage()
            ->putOS()
            ->putCategories();

        file_put_contents('README.md', $this->newContent);

        return $this;
    }

    private function putEditor(): SearchEngine
    {
        array_push(
            $this->newContent,
            "\n```text",
            "\n💡Editor",
            "\n"
        );

        foreach ($this->apiReturn['data']['editors'] as $editor) {
            array_push(
                $this->newContent,
                "\n{$editor['name']}         {$editor['text']}         ████████████████████▒░░░░   {$editor['percent']} % "
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
        array_push(
            $this->newContent,
            "\n```text",
            "\n💬 Linguagem",
            "\n"
        );

        foreach ($this->apiReturn['data']['languages'] as $laguage) {
            array_push(
                $this->newContent,
                "\n{$laguage['name']}         {$laguage['text']}         ████████████████████▒░░░░   {$laguage['percent']} % "
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
        array_push(
            $this->newContent,
            "\n```text",
            "\n💻 Sistema Operacional",
            "\n"
        );

        foreach ($this->apiReturn['data']['operating_systems'] as $os) {
            array_push(
                $this->newContent,
                "\n{$os['name']}         {$os['text']}         ████████████████████▒░░░░   {$os['percent']} % "
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
        array_push(
            $this->newContent,
            "\n```text",
            "\n📦 Categoria",
            "\n"
        );

        foreach ($this->apiReturn['data']['categories'] as $categories) {
            array_push(
                $this->newContent,
                "\n{$categories['name']}         {$categories['text']}         ████████████████████▒░░░░   {$categories['percent']} % "
            );
        }

        array_push(
            $this->newContent,
            "\n```"
        );
        return $this;
    }

    private function commitChanges()
    {

    }
}