<?php

class AdapterTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @dataProvider targetInstancesDataProvider
     * @param \Adapter\BackupService $service
     */
    public function testAdapterAdaptsTargetInterface(\Adapter\BackupService $service)
    {
        $this->assertNotEmpty($service->backup('from', 'to'));
    }

    public function targetInstancesDataProvider(): array
    {
        return [
            'regular object' => [new \Adapter\LocalBackupService()],
            'adaptee' => [
                new \Adapter\CloudBackupServiceAdapter(
                    new \Adapter\CloudFileSystem()
                )
            ],
        ];
    }
}
