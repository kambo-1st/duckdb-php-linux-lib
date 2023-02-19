<?php

namespace Kambo\DuckDBPHPLinuxLib;

final class Info
{
    public function getPath() : string {
        return __DIR__ . '/../libduckdb.so';
    }
}
