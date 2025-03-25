<?php

namespace Inserve\MetabaseAPI\Model\Card;

use Inserve\MetabaseAPI\Model\Database\TableColumn;
use Symfony\Component\Serializer\Attribute\SerializedName;

/**
 *
 */
final class VisualizationSettings
{
    #[SerializedName('graph.show_goal')]
    protected ?bool $graphShowGoal = null;

    #[SerializedName('graph.show_trendline')]
    protected ?bool $graphShowTrendline = null;

    #[SerializedName('graph.show_values')]
    protected ?bool $graphShowValues = null;

    #[SerializedName('graph.series_order_dimension')]
    protected ?string $graphSeriesOrderDimension = null;

    #[SerializedName('graph.x_axis.title_text')]
    protected ?string $graphXAxisTitleText = null;

    #[SerializedName('graph.y_axis.scale')]
    protected ?string $graphYAxisScale = null;

    #[SerializedName('graph.label_value_frequency')]
    protected ?string $graphLabelValueFrequency = null;

    /** @var string[]|null */
    #[SerializedName('graph.metrics')]
    protected ?array $graphMetrics = null;

    #[SerializedName('graph.label_value_formatting')]
    protected ?string $graphLabelValueFormatting = null;

    #[SerializedName('graph.series_order')]
    protected ?string $graphSeriesOrder = null;

    /** @var string[]|null */
    #[SerializedName('graph.dimensions')]
    protected ?array $graphDimensions = null;

    #[SerializedName('pie.percent_visibility')]
    protected ?string $piePercentVisibility = null;

    #[SerializedName('pie.slice_threshold')]
    protected ?float $pieSliceTreshold = null;

    #[SerializedName('pie.show_legend')]
    protected ?bool $pieShowLegend = null;

    #[SerializedName('pie.show_total')]
    protected ?bool $pieShowTotal = null;

    /** @var TableColumn[]|null */
    #[SerializedName('table.columns')]
    protected ?array $tableColumns = null;

    #[SerializedName('table.pivot_column')]
    protected ?string $tablePivotColumn = null;

    #[SerializedName('table.cell_column')]
    protected ?string $tableCellColumn = null;

    #[SerializedName('table.column_formatting')]
    protected ?array $tableColumnFormatting = null;

    #[SerializedName('pivot_table.column_split')]
    protected ?array $pivotTableColumnSplit = null;

    protected ?array $columnSettings = null;
    protected ?array $seriesSettings = null;


    /**
     * @return TableColumn[]|null
     */
    public function getTableColumns(): ?array
    {
        return $this->tableColumns;
    }

    /**
     * @return array|null
     */
    public function getTableColumnFormatting(): ?array
    {
        return $this->tableColumnFormatting;
    }

    /**
     * @return string|null
     */
    public function getTablePivotColumn(): ?string
    {
        return $this->tablePivotColumn;
    }

    /**
     * @return array|null
     */
    public function getPivotTableColumnSplit(): ?array
    {
        return $this->pivotTableColumnSplit;
    }

    /**
     * @return string|null
     */
    public function getTableCellColumn(): ?string
    {
        return $this->tableCellColumn;
    }

    /**
     * @return bool|null
     */
    public function getGraphShowGoal(): ?bool
    {
        return $this->graphShowGoal;
    }

    /**
     * @return bool|null
     */
    public function getGraphShowTrendline(): ?bool
    {
        return $this->graphShowTrendline;
    }

    /**
     * @return bool|null
     */
    public function getGraphShowValues(): ?bool
    {
        return $this->graphShowValues;
    }

    /**
     * @return string|null
     */
    public function getGraphSeriesOrderDimension(): ?string
    {
        return $this->graphSeriesOrderDimension;
    }

    /**
     * @return string|null
     */
    public function getGraphXAxisTitleText(): ?string
    {
        return $this->graphXAxisTitleText;
    }

    /**
     * @return string|null
     */
    public function getGraphYAxisScale(): ?string
    {
        return $this->graphYAxisScale;
    }

    /**
     * @return string|null
     */
    public function getGraphLabelValueFrequency(): ?string
    {
        return $this->graphLabelValueFrequency;
    }

    /**
     * @return string[]|null
     */
    public function getGraphMetrics(): ?array
    {
        return $this->graphMetrics;
    }

    /**
     * @return string|null
     */
    public function getGraphLabelValueFormatting(): ?string
    {
        return $this->graphLabelValueFormatting;
    }

    /**
     * @return string|null
     */
    public function getGraphSeriesOrder(): ?string
    {
        return $this->graphSeriesOrder;
    }

    /**
     * @return string[]|null
     */
    public function getGraphDimensions(): ?array
    {
        return $this->graphDimensions;
    }

    /**
     * @return array|null
     */
    public function getColumnSettings(): ?array
    {
        return $this->columnSettings;
    }

    /**
     * @return array|null
     */
    public function getSeriesSetttings(): ?array
    {
        return $this->seriesSettings;
    }

    /**
     * @return string|null
     */
    public function getPiePercentVisibility(): ?string
    {
        return $this->piePercentVisibility;
    }

    /**
     * @return float|null
     */
    public function getPieSliceTreshold(): ?float
    {
        return $this->pieSliceTreshold;
    }


    /**
     * @return bool|null
     */
    public function getPieShowLegend(): ?bool
    {
        return $this->pieShowLegend;
    }

    /**
     * @return bool|null
     */
    public function getPieShowTotal(): ?bool
    {
        return $this->pieShowTotal;
    }

    /**
     * @param TableColumn[]|null $tableColumns
     *
     * return self
     */
    public function setTableColumns(?array $tableColumns): self
    {
        $this->tableColumns = $tableColumns;

        return $this;
    }

    /**
     * @param bool|null $graphShowGoal
     *
     * @return self
     */
    public function setGraphShowGoal(?bool $graphShowGoal): self
    {
        $this->graphShowGoal = $graphShowGoal;

        return $this;
    }

    /**
     * @param bool|null $graphShowTrendline
     *
     * @return self
     */
    public function setGraphShowTrendline(?bool $graphShowTrendline): self
    {
        $this->graphShowTrendline = $graphShowTrendline;

        return $this;
    }

    /**
     * @param bool|null $graphShowValues
     *
     * @return self
     */
    public function setGraphShowValues(?bool $graphShowValues): self
    {
        $this->graphShowValues = $graphShowValues;

        return $this;
    }

    /**
     * @param string|null $graphSeriesOrderDimension
     *
     * @return self
     */
    public function setGraphSeriesOrderDimension(?string $graphSeriesOrderDimension): self
    {
        $this->graphSeriesOrderDimension = $graphSeriesOrderDimension;

        return $this;
    }

    /**
     * @param string|null $graphXAxisTitleText
     *
     * @return self
     */
    public function setGraphXAxisTitleText(?string $graphXAxisTitleText): self
    {
        $this->graphXAxisTitleText = $graphXAxisTitleText;

        return $this;
    }

    /**
     * @param string|null $graphYAxisScale
     *
     * @return self
     */
    public function setGraphYAxisScale(?string $graphYAxisScale): self
    {
        $this->graphYAxisScale = $graphYAxisScale;

        return $this;
    }

    /**
     * @param string|null $graphLabelValueFrequency
     *
     * @return self
     */
    public function setGraphLabelValueFrequency(?string $graphLabelValueFrequency): self
    {
        $this->graphLabelValueFrequency = $graphLabelValueFrequency;

        return $this;
    }

    /**
     * @param string[]|null $graphMetrics
     */
    public function setGraphMetrics(?array $graphMetrics): self
    {
        $this->graphMetrics = $graphMetrics;

        return $this;
    }

    /**
     * @param string|null $graphLabelValueFormatting
     *
     * @return self
     */
    public function setGraphLabelValueFormatting(?string $graphLabelValueFormatting): self
    {
        $this->graphLabelValueFormatting = $graphLabelValueFormatting;

        return $this;
    }

    /**
     * @param string|null $graphSeriesOrder
     *
     * @return self
     */
    public function setGraphSeriesOrder(?string $graphSeriesOrder): self
    {
        $this->graphSeriesOrder = $graphSeriesOrder;

        return $this;
    }

    /**
     * @param array|null $graphDimensions
     *
     * @return self
     */
    public function setGraphDimensions(?array $graphDimensions): self
    {
        $this->graphDimensions = $graphDimensions;

        return $this;
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
     * @param array|null $pivotTableColumnSplit
     *
     * @return self
     */
    public function setPivotTableColumnSplit(?array $pivotTableColumnSplit): self
    {
        $this->pivotTableColumnSplit = $pivotTableColumnSplit;

        return $this;
    }

    /**
     * @param array|null $tableColumnFormatting
     *
     * @return self
     */
    public function setTableColumnFormatting(?array $tableColumnFormatting): self
    {
        $this->tableColumnFormatting = $tableColumnFormatting;

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

    /**
     * @param array|null $columnSettings
     *
     * @return self
     */
    public function setColumnSettings(?array $columnSettings): self
    {
        $this->columnSettings = $columnSettings;

        return $this;
    }

    /**
     * @param array|null $seriesSettings
     *
     * @return self
     */
    public function setSeriesSettings(?array $seriesSettings): self
    {
        $this->seriesSettings = $seriesSettings;

        return $this;
    }

    /**
     * @param string|null $piePercentVisibility
     *
     * @return self
     */
    public function setPiePercentVisibility(?string $piePercentVisibility): self
    {
        $this->piePercentVisibility = $piePercentVisibility;

        return $this;
    }

    /**
     * @param float|null $pieSliceTreshold
     *
     * @return self
     */
    public function setPieSliceTreshold(?float $pieSliceTreshold): self
    {
        $this->pieSliceTreshold = $pieSliceTreshold;

        return $this;
    }

    /**
     * @param bool|null $pieShowLegend
     *
     * @return self
     */
    public function setPieShowLegend(?bool $pieShowLegend): self
    {
        $this->pieShowLegend = $pieShowLegend;

        return $this;
    }

    /**
     * @param bool|null $pieShowTotal
     *
     * @return self
     */
    public function setPieShowTotal(?bool $pieShowTotal): self
    {
        $this->pieShowTotal = $pieShowTotal;

        return $this;
    }
}
