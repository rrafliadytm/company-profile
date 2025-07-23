async function fetchChartData() {
    // In real CI4 app, you would fetch this data from a controller endpoint via AJAX
    return new Promise((resolve) => {
    setTimeout(() => {
        resolve({
        labels: [
            "Jan",
            "Feb",
            "Mar",
            "Apr",
            "May",
            "Jun",
            "Jul",
            "Aug",
            "Sep",
            "Oct",
        ],
        barDatasets: [
            {
            label: "Artworks Sold",
            data: [12, 19, 3, 5, 2, 3, 7, 10, 15, 20],
            backgroundColor: "#2563EB",
            borderRadius: 4,
            maxBarThickness: 40,
            },
            {
            label: "Visitors",
            data: [30, 25, 40, 45, 50, 55, 60, 65, 70, 75],
            backgroundColor: "#F59E0B",
            borderRadius: 4,
            maxBarThickness: 40,
            },
        ],
        areaDatasets: [
            {
            label: "Artworks Sold",
            data: [12, 19, 3, 5, 2, 3, 7, 10, 15, 20],
            borderColor: "#2563EB",
            backgroundColor: "rgba(37, 99, 235, 0.3)",
            fill: true,
            tension: 0.4,
            pointRadius: 4,
            pointHoverRadius: 6,
            },
            {
            label: "Visitors",
            data: [30, 25, 40, 45, 50, 55, 60, 65, 70, 75],
            borderColor: "#F59E0B",
            backgroundColor: "rgba(245, 158, 11, 0.3)",
            fill: true,
            tension: 0.4,
            pointRadius: 4,
            pointHoverRadius: 6,
            },
        ],
        });
    }, 800);
    });
}

async function renderCharts() {
    const chartData = await fetchChartData();

    const barCtx = document.getElementById("barChart").getContext("2d");
    new Chart(barCtx, {
    type: "bar",
    data: {
        labels: chartData.labels,
        datasets: chartData.barDatasets,
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
        interaction: {
        mode: "nearest",
        intersect: false,
        },
        plugins: {
        legend: {
            labels: {
            font: {
                family: "Inter, sans-serif",
                weight: "600",
                size: 14,
            },
            color: "#111827",
            },
        },
        tooltip: {
            enabled: true,
            backgroundColor: "#111827",
            titleFont: { family: "Inter, sans-serif", weight: "600", size: 14 },
            bodyFont: { family: "Inter, sans-serif", size: 12 },
        },
        },
        scales: {
        x: {
            ticks: {
            font: {
                family: "Inter, sans-serif",
                size: 12,
                weight: "600",
            },
            color: "#374151",
            },
            grid: {
            display: false,
            },
            stacked: false,
        },
        y: {
            beginAtZero: true,
            ticks: {
            font: {
                family: "Inter, sans-serif",
                size: 12,
                weight: "600",
            },
            color: "#374151",
            },
            grid: {
            color: "#E5E7EB",
            },
            stacked: false,
        },
        },
    },
    });

    const areaCtx = document.getElementById("areaChart").getContext("2d");
    new Chart(areaCtx, {
    type: "line",
    data: {
        labels: chartData.labels,
        datasets: chartData.areaDatasets,
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
        interaction: {
        mode: "nearest",
        intersect: false,
        },
        plugins: {
        legend: {
            labels: {
            font: {
                family: "Inter, sans-serif",
                weight: "600",
                size: 14,
            },
            color: "#111827",
            },
        },
        tooltip: {
            enabled: true,
            backgroundColor: "#111827",
            titleFont: { family: "Inter, sans-serif", weight: "600", size: 14 },
            bodyFont: { family: "Inter, sans-serif", size: 12 },
        },
        },
        scales: {
        x: {
            ticks: {
            font: {
                family: "Inter, sans-serif",
                size: 12,
                weight: "600",
            },
            color: "#374151",
            },
            grid: {
            display: false,
            },
        },
        y: {
            beginAtZero: true,
            ticks: {
            font: {
                family: "Inter, sans-serif",
                size: 12,
                weight: "600",
            },
            color: "#374151",
            },
            grid: {
            color: "#E5E7EB",
            },
        },
        },
    },
    });
}

renderCharts();