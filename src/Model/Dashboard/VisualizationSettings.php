<?php

namespace Inserve\MetabaseAPI\Model\Dashboard;

/**
 *
 */
class VisualizationSettings
{
    protected ?string $tablePivotColumn = null;
    protected ?string $tableCellColumn = null;

    /**
     * @return string|null
     */
    public function getTablePivotColumn(): ?string
    {
        return $this->tablePivotColumn;
    }

    /**
     * @return string|null
     */
    public function getTableCellColumn(): ?string
    {
        return $this->tableCellColumn;
    }

    /**
     * @param string|null $tablePivotColumn
     *
     * @return self
     */
    public function setTablePivotColumn(?string $tablePivotColumn): self
    {
        $this->tablePivotColumn = $tablePivotColumn;

        return $this;
    }

    /**
     * @param string|null $tableCellColumn
     *
     * @return self
     */
    public function setTableCellColumn(?string $tableCellColumn): self
    {
        $this->tableCellColumn = $tableCellColumn;

        return $this;
    }
}
